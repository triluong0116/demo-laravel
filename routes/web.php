<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
   return view('index', ['title'=>'Product']);
});

Route::get('signin', function (){
    return view('Admin.signin', ['title'=>'Signin']);
});

Route::get('auth-signup', function (){
    return view('Admin.signup', ['title'=>'Signup']);
});

Route::get('pass-reset', function (){
    return view('Admin.pass-reset', ['title'=>'Forget password']);
});

Route::get('product', function (){
    return view('Product.list-product', ['title'=>'List product']);
});

Route::get('cart', function (){
    return view('Product.cart', ['title'=>'Your cart']);
});

Route::get('product-detail', function (){
    return view('Product.product-detail', ['title'=>'Product detail']);
});

Route::get('shop-checkout', function (){
    return view('Ecommerce.shop-checkout', ['title'=>'Shop checkout']);
});

Route::get('ecommerce-order', function (){
    return view('Ecommerce.order', ['title'=>'Order list']);
});

Route::get('ecommerce-order-detail', function (){
    return view('Ecommerce.order-detail', ['title'=>'Order detail']);
});
