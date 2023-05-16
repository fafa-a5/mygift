<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
   {
        $products = Product::all();
        return view('index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
            if(!$product){
        request()->session()->flash('error','Unable to locate the product');
        return to_route('show')->withErrors([
            'errors' => 'Unable to locate the product'
        ]);
        }
        return view('product_detail', [
            'product' => $product]);

    }
}