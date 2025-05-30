<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/contact',[HomeController::class,'contact']);
route::get('/blog',[HomeController::class,'blog']);
route::get('/products',[HomeController::class,'products']);
route::get('/view_catagory',[AdminController::class,'view_catagory']);
route::post('/add_catagory',[AdminController::class,'add_catagory']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/order',[AdminController::class,'order']);
route::get('/delivered/{id}',[AdminController::class,'delivered']);
route::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);
route::get('/search',[AdminController::class,'searchdata']);



route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
route::get('/product_details/{id}',[HomeController::class,'product_details']);
route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
route::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
route::get('/clear',[HomeController::class,'clear']);
route::get('/cash_order',[HomeController::class,'cash_order']);
route::get('/stripe/{total}',[HomeController::class,'stripe']);
Route::post('stripe/{total}',[HomeController::class, 'stripePost'])->name('stripe.post');
route::get('/show_order',[HomeController::class,'show_order']);
route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);
route::post('/add_comment',[HomeController::class,'add_comment']);
route::post('/add_reply',[HomeController::class,'add_reply']);
route::get('/product_search',[HomeController::class,'product_search']);
route::get('/about',[HomeController::class,'about']);
route::post('/subs',[HomeController::class,'subs']);