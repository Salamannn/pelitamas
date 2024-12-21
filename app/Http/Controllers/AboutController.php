<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class AboutController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::all();
        $articles = Article::all();
        return view('about',compact('company','articles'));
    }
}
