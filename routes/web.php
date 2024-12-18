<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




Route::get('/',[HomeController::class, 'index'])->name('home');

// Route untuk halaman produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/contact', [ContactController::class,'index'])->name('contact');
