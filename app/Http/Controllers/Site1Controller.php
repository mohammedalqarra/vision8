<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index()
    {
        $title = 'First Website ';
        $desc = 'This is my first website using Laravel';
        $about_f = 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.';
        $about_l = 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!';
        $file = 'https://startbootstrap.com/theme/freelancer/';

        $Portfolios = [
            [
                'title' => 'LOG CABIN',
                'image' => 'cabin.png',
                'text' => 'Lorem CABIN'
            ],
            [
                'title' => 'TASTY CAKE',
                'image' => 'cake.png',
                'text' => 'Lorem cake'
            ],
            [
                'title' => 'CIRCUS TENT',
                'image' => 'circus.png',
                'text' => 'Lorem circus'
            ],
            [
                'title' => 'CONTROLLER',
                'image' => 'game.png',
                'text' => 'Lorem game'
            ],
            [
                'title' => 'LOCKED SAFE',
                'image' => 'safe.png',
                'text' => 'Lorem safe'
            ],
            [
                'title' => 'SUBMARINE',
                'image' => 'submarine.png',
                'text' => 'Lorem submarine',
            ],
        ];

        $data = [
            ['Mohammed', 'mohammed@gmail.com', '123'],
            ['ALi', 'ali@gmail.com', '456'],
            ['Ahmed', 'ahmed@gmail.com', '789'],
            ['Mahmoude', 'mahmoude@gmail.com', '123456789'],
        ];
        return view('Site1.index', compact('title', 'desc', 'about_f', 'about_l', 'file', 'Portfolios', 'data'));
    }
}