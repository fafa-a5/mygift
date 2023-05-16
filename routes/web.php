<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/product/show/{id}',  [HomeController::class,'show'])->name('product_detail');
Route::get('/checkout/product/{id}',  [IndexController::class,'checkout'])->name('checkout');
Route::post('/orders', [OrderController::class, 'store'])->name('orders');
Route::get('/payment/order/{id}', [PaymentController::class, 'create'])->name('payment.new');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
