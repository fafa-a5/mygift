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
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
   {
    $products = Product::all();
    //dd($products);
    return view('index', [
        'products' => $products
        
    ]);
    }

     public function show($id)
    {
    $product = Product::find($id);
   /* if(!$product){
        request()->session()->flash('error','Unable to locate the todo');
        return to_route('detail')->withErrors([
            'errors' => 'Unable to locate the todo'
        ]);
    }*/
    return view('product_detail', [
        'product' => $product]);

    }
}