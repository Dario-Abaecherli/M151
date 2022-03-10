<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'products']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'product']);

Route::get('/cart/add/{id}', [\App\Http\Controllers\CartController::class, 'addCart']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart']);

Route::get('/user/login', [\App\Http\Controllers\UserController::class, 'login']);

Route::get('/user/register', [\App\Http\Controllers\UserController::class, 'register']);

Route::get('/user/logout/{id}', [\App\Http\Controllers\UserController::class, 'logout']);