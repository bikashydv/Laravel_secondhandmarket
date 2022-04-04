<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product()
    {
        $products = Product::with('category')->get();
//        $products = Product::with('category')->latest()->paginate(20);
//        dd($products);
        return view('backend.product-index', compact('products'));
    }

    public function productedit($id)
    {
        if (!$id) {
            return false;
        }
        $data['categories'] = Category::all();
        $data['product'] = Product::where('id', $id)->first();
        return view('backend.product-indexedit', $data);
    }

    public function productdelete($id)
    {
//        dd(" This product is deleted sucessfully");
        Product::destroy($id);
        return redirect()->back();
    }


    public function productupdate(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'author' => 'required',
            'publish_on' => 'required',
            'category' => 'required',
        ]);

        $image_url ='';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
//                dd($image_url);
        }
        try {
            $data = [

                'name' => $request->get('name'),
                'price' => $request->get('price'),
                'author' => $request->get('author'),
                'publish_on' => $request->get('publish_on'),
                'category_id' => $request->get('category'),
                'image' => $image_url,
            ];

            Product::where('id', $id)->update($data);
            return redirect()->route('product');
        } catch (Exception $exception) {
            // dd($exception);
        }

    }

    public function productStore(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'author' => 'required',
            'publish_on' => 'required',
            'category' => 'required',
            'image' => 'required',

        ]);

            $image_url ='';
            if($request->hasFile('image')){
                $file = $request->file('image');
                $new_name = str_random(5).time().$file->getClientOriginalName();
                $upload_path =public_path('/uploads');
                $file->move($upload_path, $new_name);
                $image_url = asset('uploads/'.$new_name);
//                dd($image_url);
            }



        try {
            $data = [

                'name' => $request->get('name'),
                'price' => $request->get('price'),
                'author' => $request->get('author'),
                'publish_on' => $request->get('publish_on'),
                'category_id' => $request->get('category'),
                'image' => $image_url ?? '',

            ];
//            dd($data);
            Product::create($data);
            return redirect()->route('product');
        } catch (Exception $exception) {
             dd($exception);
        }

    }

    public function createProduct( )
    {
        $data['categories'] = Category::all();
        return view('backend.create-product', $data);

    }

    public function getInfo(Request  $request)
    {
        if (!$request->id){
            return response()->json(['error' => 'Id is missing']);
        }

        $product = Product::find($request->id);
        if ($product){
            return response()->json($product);
        }else{
            return response()->json(['error' => 'Not found']);
        }

    }

}
