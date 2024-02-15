<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\product;

class productController extends Controller
{
    //
    public function index()
    {
        $Products= product::all();
        return view('products.index' , [ 'product'=> $Products , 'type'=> 'shop']);

    }
    public function creat()
    {
        return view('products.creat ',['type'=> 'login']);
    }



    public function store(Request $request)
    {


        $product = new product();
        $product->product_name= $request->input('product_name');
        $product->price=$request->input('price');
        $product->description=$request->input('description');
        $product->stock=$request->input('stock');
        $product->save();

        return redirect()->route('Shop.index');


        // if ($request->hasFile('image'))
        //  {
        //      $file =$request -> file ('image') ;
        //      $extension = $file -> getClientOriginalExtension ();
        //      $filename = time () . "." . $extension;
        //      $file -> move ('uploads/images', $filename);
        //      $product['image']='uploads/images/' . $filename;
        //  };


    // $rules= $request -> validate([
    //      'product_name'=>'product_name',
    //      'price'=>'required||decimal:0,2',
    //      'description'=>'nullable',
    //      'stock'=>'required|numeric'
    //      ]);
    //  $newproduct=Product::create($rules);
    //  return redirect()->route('products.index', $newproduct);


    }

}
