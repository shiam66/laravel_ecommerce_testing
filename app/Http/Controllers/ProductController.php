<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Manufacturer;
use App\Product;
use DB;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function createProduct(){
        $categories = Category::where('publicStatus',1)->get();
        $manufacturers = Manufacturer::where('publicStatus',1)->get();
        return view('admin.product.createProduct', ['categories'=>$categories, 'manufacturers'=>$manufacturers]);
    }

    public function storeProduct(Request $request){
        $this->validate($request,[
            'productName'=>'required',
            'productPrice'=>'required',
            'productQuantity'=>'required',
            'productShortDescription'=>'required',
            'productLongDescription'=>'required',
            'productImages'=>'required',
        ]);
        //return $request->all();
        $productImage = $request->file('productImages');
        $name = $productImage->getClientOriginalName();
        $uploadedFile =date("Ymd"). time().'_'.$name;
        $uploadPath = 'public/productImages/';
        $productImage->move($uploadPath,$uploadedFile);
        $imageUrl = $uploadPath.$uploadedFile;
        $this->saveProductInfo($request, $imageUrl);
        return redirect('/product/add')->with('message','Product info Save Successfully');
    }

    protected function saveProductInfo(Request$request, $imageUrl){
        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImages = $imageUrl;
        $product->publicStatus = $request->publicStatus;
        $product->save();
    }

    public function manageProduct(){
        $products = DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('manufacturers', 'products.manufacturerId', '=', 'manufacturers.id')
            ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicStatus', 'categories.categoryName', 'manufacturers.manufacturerName')
            ->get();
//        echo '<pre>';
//        print_r($products);
//        exit();
        return view ('admin.product.manageProduct', ['products'=>$products]);
    }

    public function viewProduct($id){
        $productById = DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('manufacturers', 'products.manufacturerId', '=', 'manufacturers.id')
            ->select('products.*', 'categories.categoryName', 'manufacturers.manufacturerName')
            ->where('products.id', $id)
            ->first();
        return view ('admin.product.viewProduct', ['product'=>$productById]);
    }

    public function editProduct($id){
        $categories = Category::where('publicStatus',1)->get();
        $manufacturers = Manufacturer::where('publicStatus',1)->get();
        $productById = Product::where('id', $id)->first();
        return view ('admin.product.editProduct', ['productById'=>$productById, 'categories'=>$categories, 'manufacturers'=>$manufacturers]);
    }

    public function updateProduct(Request $request){
        $imageUrl = $this->imageExistStatus($request);

        $product=Product::find($request->productId);

        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImages = $imageUrl;
        $product->publicStatus = $request->publicStatus;
        $product->save();

        return redirect('/product/manage')->with('updateMessage','Product info Update Successfully');
    }

    private function imageExistStatus($request){
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImages');
        if($productImage){
            unlink($productById->productImages);
            $name = $productImage->getClientOriginalName();
            $uploadedFile =date("Ymd"). time().'_'.$name;
            $uploadPath = 'public/productImages/';
            $productImage->move($uploadPath, $uploadedFile);
            $imageUrl = $uploadPath. $uploadedFile;
        }else{
            $imageUrl = $productById->productImages;
        }
        return $imageUrl;
    }

    public function deleteProduct($id){
        $product=Product::find($id);

        if($product->productImages){
            if (file_exists($product->productImages)) {
                //File::delete($image_path);
                unlink($product->productImages);
            }
        }

        $product->delete();
        return redirect('/product/manage')->with('deleteMessage','Product info Delete Successfully');
    }

}
