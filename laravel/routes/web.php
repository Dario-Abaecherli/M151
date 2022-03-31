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
    // return redirect('/login');
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
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginView']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'registerView']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);