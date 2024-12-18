<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::all();
        return view('about',compact('company'));
    }
}
