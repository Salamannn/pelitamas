<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class ContactController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::first();
        // dd($company->description);
        return view('contact',compact('company'));
    }
}
