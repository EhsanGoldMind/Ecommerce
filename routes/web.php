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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Session::forget('user');
    return redirect('login');
});

Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);

Route::post('/signsup',[\App\Http\Controllers\UserController::class,'signup']);

Route::post('/signup',function (){
    return view('signup');
});

Route::get('/',[\App\Http\Controllers\ProductController::class,'index']);

Route::get('/detail/{id}',[\App\Http\Controllers\ProductController::class,'detail']);

Route::get('/search',[\App\Http\Controllers\ProductController::class,'search']);

Route::post('/add_to_cart',[\App\Http\Controllers\ProductController::class,'cart']);

Route::get('/cartlist',[\App\Http\Controllers\ProductController::class,'cartlist']);

Route::get('/remove/cartlist/{id}',[\App\Http\Controllers\ProductController::class,'removecartlist']);

Route::get('/ordernow',[\App\Http\Controllers\ProductController::class,'ordernow']);

Route::get('/orderaction',[\App\Http\Controllers\ProductController::class,'orderaction']);

Route::get('/myorders',[\App\Http\Controllers\ProductController::class,'myorders']);

Route::get('/rating/{id}',[\App\Http\Controllers\ProductController::class,'rating']);
