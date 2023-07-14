<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct(){

        return view('admin.product.addproduct');
    }

    public function saveProduct(Request $request){


        $products=new Product();
        $products->ProductName=$request->ProductName;
        $products->ProductId=$request->ProductId;
        $products->ProductCategory=$request->ProductCategory;
        $products->ProductPrice=$request->ProductPrice;
        $products->ProductImage='img';
        $products->ProductQuantity=$request->ProductQuantity;
        $products->ProductDescription=$request->ProductDescription;
        $products->PublicationStatus=$request->PublicationStatus;
        $products->save();

        $productId=$products->id; //get the product id


        $productImg=$request->file('ProductImage');
        $imgName=$productId.$productImg->getClientOriginalName(); //Change product name

        $uploadPath='public/imgFolder/';
        $productImg->move($uploadPath,$imgName);
        $imgurl=$uploadPath.$imgName;

        $updateImg=Product::find($productId); //Update product name
        $updateImg->ProductImage=$imgurl;
        $updateImg->save();

        return redirect('/add-product')->with('msg', 'Data successfully inserted into the database;');




    }

    public function manageProduct(){

        $products=DB::table('products')->simplePaginate(10);



        return view('admin.product.manageproduct',['products'=>$products]);


    }

    public function editProduct($id){
        $productById= Product::where('id',$id)->first();

        return view('admin.product.editproduct',['productById'=>$productById]);

    }

    public function updateProduct(Request $request){

        $products= Product::find($request->id);
        $products->ProductName=$request->ProductName;
        $products->ProductId=$request->ProductId;
        $products->ProductCategory=$request->ProductCategory;
        $products->ProductPrice=$request->ProductPrice;
        $products->ProductImage='img';
        $products->ProductQuantity=$request->ProductQuantity;
        $products->ProductDescription=$request->ProductDescription;
        $products->PublicationStatus=$request->PublicationStatus;
        $products->save();

        $productId=$products->id; //get the product id


        $productImg=$request->file('ProductImage');
        $imgName=$productId.$productImg->getClientOriginalName(); //Change product name

        $uploadPath='public/imgFolder/';
        $productImg->move($uploadPath,$imgName);
        $imgurl=$uploadPath.$imgName;

        $updateImg=Product::find($productId); //Update product name
        $updateImg->ProductImage=$imgurl;
        $updateImg->save();

        return redirect('/manage-product')->with('info','Product Updated Successfully');



    }

    public function deleteProduct($id){

        $product= Product::find($id);
        $product->delete();

        return redirect('/manage-product')->with('info','Product Deleted Successfully');

    }

    public function viewProduct($id){
        $productById= Product::where('id',$id)->first();

        return view('admin.product.viewproduct',['productById'=>$productById]);

    }



}
