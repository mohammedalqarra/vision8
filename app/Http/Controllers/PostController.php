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
            $posts = post::where('title', 'like', '%' . request()->q . '%')->orderByDesc('id')->paginate(10);
            // $posts = post::where('title', request()->q)->paginate(10);
        } else {
            $posts = post::paginate(10);
            // $posts = post::orderByDesc('id')->paginate(10);
            // $posts = post::latest('id')->paginate(10);
            // $posts = post::orderBy('id' , 'desc')->paginate(10);
        }

        // dd($posts);

        return  view('Posts.index', compact('posts'));
    }

    public function show($id)
    {
        // أجيب عنصر واحد فقط
        $post = post::find($id); // تشتغل فقط مع ال id

        if (!$post) {
            //     abort(404);
            return redirect()->route('Posts.index');
        }

        // or
        // $post = post::findOrFail($id);
        dd($post->title);
    }
}