<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $data = ["Product"=>Product::all()];
        return view('ProductPage.home',$data);

    }

    public function insert(Request $req){
        $data = ['Products'=> Product::all()];
        return view('ProductPage.insert');
       
    }

    public function store(Request $req){
        $pro = new Product();
        $pro->title=$req->title;
        $pro->brand=$req->brand;
        $pro->price=$req->price;
        $pro->discount_prize=$req->discount_prize;
        $pro->description=$req->description;
        $pro->image=$req->image;
        $pro->qty=$req->qty;
        $pro->category_id=$req->category_id;
        $pro->save();

        return redirect()->route('product.home');


    }

    public function update(){

    }

    public function edit(){

    }
    public function destroy($id){
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route('product.delete');

    }

    
}
