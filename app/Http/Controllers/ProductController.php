<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function categoryProduct($category){
        // return $category;
        // $items = Product::where('category','like', '%'.$category.'%')->paginate(10);
        // return view('showProduct/categoryProduct',['Products'=>$items]);
        if($category == "knitwear"){
            return view("products/showProducts");
        }



    }
}
