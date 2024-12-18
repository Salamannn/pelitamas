<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class ContactController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::all();
        return view('contact',compact('company'));
    }
}
