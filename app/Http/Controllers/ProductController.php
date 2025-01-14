<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil produk dengan pagination (10 produk per halaman)
        $products = Product::latest()->paginate(10);

        // Return ke view 'products' dengan data $products
        return view('products', compact('products'));
    }
}
