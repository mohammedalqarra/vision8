<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        // return 'index Page';
        $name = 'Mohammed';
        $text = 'Lorem ipsum dolor sit amet dd consectetur  elit. Saepe iusto autem voluptatibus quasi dolore animi minus optio libero beatae adipisci ut illo esse ab tempore ratione unde, temporibus odit facilis?';
        // 1  return view('test')->with('name', $name)->with('text', $text);
        //2 return view('test', compact('name', 'text'));
        return view('test', [
            'name' => $name,
            'text' => $text
        ]);
    }


    public function about()
    {
        return 'about Page';
    }


    public function contact()
    {
        return 'contact Page';
    }

    public function user($id)
    {
        return 'user Page ' . $id;
    }
}