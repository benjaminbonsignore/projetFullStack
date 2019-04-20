<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->where('highlight',1);
        
        return view('welcome')->with('products', $products);
    }
    
    public function display()
    {
        $products = Product::all();
        
        return view('products')->with('products', $products);
    }
    
    public function filter($value)
    {
        $products = Product::all()->where('mark',$value);
        
        return view('products')->with('products', $products);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        
        return view('details')->with('product', $product);
    }
}
