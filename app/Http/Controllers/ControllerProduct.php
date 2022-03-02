<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ControllerProduct extends Controller
{
    public function product()
    {
        $products=Product::with('description')->get();
//        dd($products);

    }

    public function category()
    {

        $category=Category::with('products')->first();
        dd($category);
    }

    public  function site(){
        return view('backend.site_setting');
    }

    public function dashboard(){
        return view('backend.layouts.dashboard');
    }



}
