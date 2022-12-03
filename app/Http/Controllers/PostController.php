<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        // $Posts = 'SELECT * FORM Posts';
        // $Posts = mysqli_query($conn , $Posts);
        // $Posts = mysqli_fetch_array($Posts);

        $posts = post::all();

        // dd($posts);

        return  view('Posts.index', compact('posts'));
    }
}