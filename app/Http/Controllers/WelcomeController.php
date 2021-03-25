<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomeController extends Controller
{
    public function index(){
        $publicProducts = Product::where('publicStatus', 1)->get();
        return view ('frontEnd.home.homeContent', ['publicProducts'=>$publicProducts]);
    }

    public function category($id){
        $publicCategoryProducts = Product::where('categoryId', $id)
            ->where('publicStatus', 1)
            ->get();
        return view ('frontEnd.category.categoryContent', ['publicCategoryProducts'=>$publicCategoryProducts]);
    }

    public function contact(){
        $categories = Category::all();
        return view('frontEnd.contact.contactContent', ['categories'=>$categories]);
    }

    public function productDetails($id){
        $productById = Product::where('id', $id)->first();
        return view('frontEnd.product.productContent', ['productById'=>$productById]);
    }
}
