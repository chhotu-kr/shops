<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //
    public function index(){
        return view("category_home",['category'=>category::all()]);



    }
   
    public function store(Request $req){
        $req->validate(['cat_title'=>'required',]);
        $data = new category();
        $data->cat_title=$req->input('cat_title');
        $data->cat_description=$req->input('cat_description');
        $data->save();

    
        return redirect()->route('category.home');


    }

    public function edit($id){
        return view('category_edit',['category'=>category::find($id)]);

    }

    public function update(Request $req,$id){
        $req->validate(['cat_title'=>'required',]);
        $data = category::find($id);
        $data->cat_title=$req->input('cat_title');
        $data->cat_description=$req->input('cat_description');
        $data->save();

    
        return redirect()->route('category.home');

    }
    public function delete(Request $req, $id){
        $data = category::find($id);
        $data->delete();
        return redirect()->route('category.home');

    }
}
