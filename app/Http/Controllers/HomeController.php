<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function blog()
    {
        return view('blog');
    }

    public function careers()
    {
        return view('careers');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function vendorRegistration()
    {
        return view('vendorRegistration');
    }
}
