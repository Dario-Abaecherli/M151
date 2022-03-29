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
    // return redirect('/user/login');
});

// Product
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'products']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'product']);

// Cart
Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'addCart']);
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart']);
Route::get('/cart/remove/{id}', [\App\Http\Controllers\CartController::class, 'removeCart']);
Route::get('/cart/drop', [\App\Http\Controllers\CartController::class, 'dropCart']);

// User
Route::post('/userregister', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/userlogin', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/user/login', [\App\Http\Controllers\UserController::class, 'loginView']);
Route::get('/user/register', [\App\Http\Controllers\UserController::class, 'registerView']);
Route::get('/user/logout/{id}', [\App\Http\Controllers\UserController::class, 'logoutView']);