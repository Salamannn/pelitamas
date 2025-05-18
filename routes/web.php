<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;




Route::get('/',[HomeController::class, 'index'])->name('home');

// Route untuk halaman produk
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/contact', [ContactController::class,'index'])->name('contact');

Route::get('/articles', [ArticleController::class,'index'])->name('articles');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');
