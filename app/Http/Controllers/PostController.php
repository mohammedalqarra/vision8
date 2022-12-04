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

        // $posts = post::all();
        // $posts = post::simplePaginate();
        // $posts = post::paginate(10);

        if (request()->has('q')) {
            $posts = post::where('title', 'like', '%' . request()->q . '%')->paginate(10);
        } else {
            $posts = post::paginate(10);
        }

        // dd($posts);

        return  view('Posts.index', compact('posts'));
    }
}