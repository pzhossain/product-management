<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/products/index',[Products::class,'index']);

Route::post('/products/store',[Products::class,'store']);

Route::get('/products/find/{id}',[Products::class,'show']);

Route::post('/products/product_update/{id}',[Products::class,'update']);

Route::delete('/products/delete/{id}',[Products::class,'destroy']);
