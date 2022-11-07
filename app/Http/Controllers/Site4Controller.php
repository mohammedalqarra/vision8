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

    public function Contact_data(Request $request)
    {
        // a;ot of code
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'textarea' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $textarea = $request->textarea;

        return view('Site4.contact_data', compact('name', 'email', 'number', 'textarea'));
        dd($request->all());
    }
}
