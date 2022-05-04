<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        if($products){
            return response()->json(['products' => $products]);
        }

        return response()->json(['message' => 'No products found!']);


    }

    public function getCategory()
    {
        $products = Category::all();
        if($products){
            return response()->json(['category' => $products]);
        }

    }


    public function login(Request $request)
    {
       if($request->username && $request->password){
          return response()->json('You are  loggedin');
       }
        return response()->json('Soething went wrong');
    }


    public function jsonTest(){
        $as_array = [
            'name' => 'Bikash',
            'age' => '20',
            'faculty' => 'BCA',
            'division' => 'first',
        ];
$json = json_encode($as_array);
$decod = json_decode($json);
       return response($json,200);
    }
}
