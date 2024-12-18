<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(5)->get();
        $company = CompanyProfile::all();
        //dd($products);
        return view('home',compact('products','company'));
    }
}
