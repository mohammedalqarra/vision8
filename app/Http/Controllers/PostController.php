<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
            $posts = post::where('title', 'like', '%' . request()->q . '%')->orderBy('id', 'desc')->paginate(10);
            // $posts = post::where('title', request()->q)->paginate(10);
        } else {
            //     $posts = post::paginate(10);
            // $posts = post::orderByDesc('id')->paginate(10);
            // $posts = post::latest('id')->paginate(10);
            $posts = post::orderBy('id', 'desc')->paginate(10);
        }

        // dd($posts);

        return  view('Posts.index', compact('posts'));
    }

    public function trash()
    {

        $posts = post::onlyTrashed()->orderByDesc('id')->get();

        return view('Posts.trash', compact('posts'));
    }
    public function create()
    {
        $post = new Post();
        return view('Posts.create', compact('post')); 
    }

    // public function store(PostRequest $request)
    public function store(Request $request)
    {
        //dd($request->all());
        //validation
        //1
        // dd($request->all());
        // 2
        // Validator::make($request->all(), [
        //     'title' => 'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        //     'content' => 'required'
        // ])->validate();
        /* 3 the way to the validation
        1- Request Validation
        2- Validator class
        3- Request From File php artisan make:request (exRequest)
        */
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            'content' => 'required'
        ]);
        //uploads file

        $img = $request->file('image');
        $img_name = $img->getClientOriginalName();
        $img->move(public_path('uploads/Posts'), $img_name);
        //store data to database

        Post::create([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content,
        ]);
        //redirect the user
        return redirect()->route('Posts.index')->with('msg', 'post create successfully');
    }

    public function edit($id)
    {
        $post = post::find($id);

        return view('Posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'content' => 'required'
        ]);
        $post = post::find($id);
        $img_name = $post->image;
        //uploads file
        if ($request->hasFile('image')) {

            File::delete(public_path('uploads/posts/' . $img_name));

            $img = $request->file('image');
            $img_name = time().rand().$img->getClientOriginalName();
            $img->move(public_path('uploads/Posts'), $img_name);
        }
        //store data to database
        $post->update([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content,
        ]);
        //redirect the user
        return redirect()->route('Posts.index')->with('msg', 'post update successfully');
    }
    public function restore($id)
    {
        Post::onlyTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function forcedelete($id)
    {
        Post::onlyTrashed()->find($id)->forcedelete();

        return redirect()->back();
    }

    public function restore_all()
    {
        post::onlyTrashed()->restore();

        return redirect()->back();
    }

    public function delete_all()
    {
        post::onlyTrashed()->forceDelete();

        return redirect()->back();
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

    public function destroy($id)
    {
        // dd($id);

        post::destroy($id);
        return redirect()->route('Posts.index')->with('msg', 'Post delete successfully');
        //  return redirect()->back();
    }
}