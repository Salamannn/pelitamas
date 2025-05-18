<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\Service;

class AboutController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::first();
        $articles = Article::all();
        $sosialMedia = SocialMedia::all();
        $services = Service::all();
        //dd($company);
        return view('about',compact('company','articles','sosialMedia','services'));
    }
}
