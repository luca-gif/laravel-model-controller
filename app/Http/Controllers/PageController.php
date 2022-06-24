<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function header()
    {
        return view('header');
    }

    public function index()
    {
        return view('home');
    }


    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        return view('about');
    }

    public function footer()
    {
        return view('footer');
    }
}