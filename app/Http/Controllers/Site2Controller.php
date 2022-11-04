<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        return view('Site2.index');
    }

    public function about()
    {
        return view('Site2.about');
    }

    public function contact()
    {
        return view('Site2.contact');
    }

    public function post()
    {
        return view('Site2.post');
    }
}