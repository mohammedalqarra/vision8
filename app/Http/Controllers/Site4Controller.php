<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site4Controller extends Controller
{

    public function index()
    {
        return view('Site4.index');
    }

    public function portfolio()
    {
        return view('Site4.portfolio');
    }


    public function about()
    {
        return view('Site4.about');
    }

    public function team()
    {
        return view('Site4.team');
    }

    public function contact()
    {
        return view('Site4.contact');
    }
}