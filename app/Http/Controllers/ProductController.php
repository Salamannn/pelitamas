<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua data produk dari database
        $products = Product::all();

        // Return ke view 'products' dengan data $products
        return view('products', compact('products'));
    }
}
