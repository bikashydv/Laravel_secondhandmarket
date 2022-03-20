<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Exception;

class ControllerProduct extends Controller
{
    public function product()
    {
        $products=Product::with('description')->get();
//        dd($products);

    }

    public function category()
    {
        $categories =Category::get();
        return view('backend.category-index', compact('categories'));

    }

    public  function site(){
        return view('backend.site_setting');
    }

    public function dashboard(){
        return view('backend.layouts.dashboard');
    }

    public function categoryView(){
        return view('backend.category');

    }

    public function storeCategory(Request  $request){
        dd($request->all());
    }

    public function categoryedit($id)
    {
        $categories=Category::where('id',$id)->first();
        return view('backend.category-index', compact('categories'));
    }

    public function categorydelete($id)
    {
//        dd(" This product is deleted sucessfully");
        Category::destroy($id);
        return redirect()->back();
    }




    public function categorycreate(Request $request)
    {

        $request->validate([
            'name' =>'required',
            'description' => 'required',
        ]);


       try{

        $data = [

            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'icon' => $request->get('icon'),
        ];

        Category::create($data);
        return redirect()->route('category');
       }catch(Exception $exception){
            // dd($exception);
       }

    }



}
