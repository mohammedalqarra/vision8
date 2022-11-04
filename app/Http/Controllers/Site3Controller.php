<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
    public function index()
    {
        return view('Site3.index');
    }

    public function about()
    {
        return view('Site3.about');
    }

    public function experience()
    {
        return view('Site3.experience');
    }

    public function education()
    {
        return view('Site3.education');
    }

    public function skills()
    {
        return view('Site3.skills');
    }

    public function interests()
    {
        return view('Site3.interests');
    }


    public function awards()
    {
        $Certifications = [
            ' Google Analytics Certified Developer',
            '1 Place - University of Colorado Boulder - Emerging Tech Competition 2009',
            '2 Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)',
            '3 Place - University of Colorado Boulder - Emerging Tech Competition 2008',
            '4 Place - James Buchanan High School - Hackathon 2006',
            '5 Place - James Buchanan High School - Hackathon 2005',

        ];
        return view('Site3.awards', compact('Certifications'));
    }
}