<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product()
    {
        $products = Product::all();
//        dd($products);
        return view('backend.product-index', compact('products'));
    }

//    public function productedit($id)
//    {
//        if (!$id) {
//            return false;
//        }
//
//        $product = Product::where('id', $id)->first();
//        return view('backend.product-indexedit', compact('product'));
//    }

    public function productdelete($id)
    {
//        dd(" This product is deleted sucessfully");
        Product:destroy($id);
        return redirect()->back();
    }

}
