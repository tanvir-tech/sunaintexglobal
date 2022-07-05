<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('index');
});
// products 
Route::get('products/{category}', [ProductController::class,'categoryProduct']);
Route::get('products/latest',[ProductController::class,'latestProducts']);
Route::get('products/search',[ProductController::class,'search']);
Route::get('products/detail/{id}',[ProductController::class,'detail']);

// admin 
Route::post('product/insert',[ProductController::class,'insertProduct']);
Route::get('product/delete/{id}',[ProductController::class,'deleteProduct']);
Route::get('product/update/{id}',[ProductController::class,'updateProduct']);