<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createCategory(){
        return view('admin.category.createCategory');
    }

    public function storeCategory(Request$request){
        $this->validate($request,[
            'categoryName'=>'required|unique:categories',
            'categoryDescription'=>'required',
        ]);
        /* Process 1 */
        //return $request->all();
//        $category=new Category();
//        $category->categoryName = $request->categoryName;
//        $category->categoryDescription = $request->categoryDescription;
//        $category->publicStatus = $request->publicStatus;
//        $category->save();
//        return redirect('/category/add')->with('message','Category info Save Successfully');

            /* Process 2 and another code is (Model) app>Category.php there */
//        Category::create($request->all());
//        return 'Category info Save Successfully';

            /* Process 3 Query Builder */
            DB::table('categories')->insert([
                'categoryName'=>$request->categoryName,
                'categoryDescription'=>$request->categoryDescription,
                'publicStatus'=>$request->publicStatus,
            ]);
        return redirect('/category/add')->with('message','Category info Save Successfully');
    }

    public function manageCategory(){
        $categories = Category::all();
        return view ('admin.category.manageCategory', ['categories'=>$categories]);
    }

    public function editCategory($id){
        $categoryById = Category::where('id',$id)->first();
        return view('admin.category.editCategory', ['categoryById'=>$categoryById]);
    }

    public function updateCategory(Request$request){
        //dd($request->all()); For View all return Data
        $category=Category::find($request->id);
        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicStatus = $request->publicStatus;
        $category->save();
        return redirect('/category/manage')->with('updateMessage','Category info Update Successfully');
    }

    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('deleteMessage','Category info Delete Successfully');
    }

}
