<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data = [
            'products' => product::all(),
            'category' => category::all(),
        ];
        return view('home',$data);
    }
    public function categoryFilter($cat_id){
        $data = [
            'products' => product::where(['category_id'=>$cat_id])->get(),
            'category' => category::all(),
        ];
        return view('home',$data);
    }

    public function singleView($pro_id){
        $data = [
            'products'=>product::find($pro_id),
            'category'=>Category::all(),
        ];
        return view('singleView',$data);
        
    }

   
    
}
