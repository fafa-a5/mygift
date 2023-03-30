<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //dd($request);
   // $env = \Illuminate\Support\Facades\App::environment();
//dd($env);
//$name = config('app.name');
//dd($name);
    return view('welcome');
    
    });
    Route::get('/users/{id}',function ($id) {
   dd($id);
    });
//Route::post();
//Route::put();
//Route::patch();
//Route::delete();
//Route::option();

//Route::match(['get','post'],'/url', function (){});
?>
