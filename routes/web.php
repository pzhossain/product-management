<?php

use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/products/product_update',[Products::class,'update']);