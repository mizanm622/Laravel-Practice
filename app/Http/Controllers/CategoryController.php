<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view ('admin.category.addcategory');
    }

    public function saveCategory(Request $request){

        $categoris= new Category();

        $categoris->name=$request->name;
        $categoris->age=$request->age;
        $categoris->salary=$request->salary;
        $categoris->position=$request->position;
        $categoris->location=$request->location;
        $categoris->joining=date("Y-m-d");
        $categoris->save();
        return redirect('/add-category')->with('msg', 'Data successfully inserted into the database;');
    }

    public function manageCategory(){

        $categoris=DB::table('categories')->simplePaginate(5);
        return view('admin.category.managecategory',['categories'=>$categoris]);
    }


    public function editCategory($id){
       $categoryById= Category::where('id',$id)->first();

       return view('admin.category.editcategory',['categoryById'=>$categoryById]);

    }

    public function updateCategory(Request $request){
        $category=Category::find($request->id);
        $category->name=$request->name;
        $category->age=$request->age;
        $category->salary=$request->salary;
        $category->position=$request->position;
        $category->location=$request->location;
        $category->joining=$request->joining;
        $category->save();

        return redirect('/manage-category')->with('info','Category Updated Successfully');


    }

    public function deleteCategory($id){
        $category= Category::find($id);
        $category->delete();

        return redirect('/manage-category')->with('info','Category Deleted Successfully');

    }

}
