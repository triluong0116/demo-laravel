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

Route::get('/', [DemoController::class, 'index']);

Route::get('signin', [DemoController::class, 'signin']);

Route::get('auth-signup', [DemoController::class, 'signup']);

Route::get('pass-reset', [DemoController::class, 'passReset']);

Route::get('product', [DemoController::class, 'listProduct']);

Route::get('cart', [DemoController::class, 'cart']);

Route::get('product-detail', [DemoController::class, 'productDetail']);

Route::get('shop-checkout', [DemoController::class, 'shopCheckout']);
