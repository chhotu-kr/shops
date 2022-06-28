<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    public function index(){
        return view('ProductPage.home',['products'=>product::all()]);
    }
    public function insert(){
        return view('ProductPage.insert',['category'=>category::all()]);
    }
    public function store(Request $req){
        $req->validate([
            'title' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $pro = new product();
        $pro->title=$req->title;
        $pro->brand=$req->brand;
        $pro->price=$req->price;
        $pro->discount_price=$req->discount_price;
        $pro->image=$req->image;
        //image work
        $file= $req->image;
        $fileName = $file->getClientOriginalName();
        $file->move("product_image",$fileName);
        $pro->image = $fileName;
                
        $pro->qty=$req->qty;
        $pro->category_id=$req->category_id;
        $pro->description=$req->description;
        $pro->save();

        return redirect()->route('product.home');
    }
  
    public function update(){

    }

    public function edit(Request $req,$id){

    }

    public function delete($id){
        $pro = product::find($id);
        $pro->delete();
         
        return redirect()->route('product.home');
    }

}
