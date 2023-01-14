<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Student;
use App\Models\Course;

use App\Models\Comment;
use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelationController extends Controller
{
    //
    public function one_to_one()
    {
        // return 'error';

        // $user = User::find(2);

        // $insurances = Insurance::where('user_id', $user->id)->get();

        // dd($user->insurances);
        // or

        // $insurances = Insurance::find(1);

        // dd($insurances->user);
        //or

        // $users = user::all();
        $users = user::with('insurances')->get();
        return view('relation.one_to_one', compact('users'));
    }

    public function one_to_many($id)
    {
        $post = Post::find($id);

        $next = Post::where('id', '>', $post->id)->first();
        $prev = Post::where('id', '<', $post->id)->orderByDesc('id')->first();
        // dd($post->comments);
        return view('relation.one_to_many', compact('post', 'next', 'prev'));
    }

    public function one_to_many_data(Request $request)
    {
        // dd($request->all());
        Comment::create([
            'comment' => $request->comment,
            'post_id' => $request->post_id,
            'user_id' => 2,
        ]);

        return redirect()->back();
    }

    public function many_to_many()
    {
        $std = Student::find(1);
        $courses = Course::all();

        return view('relation.many_to_many',  compact('std', 'courses'));
    }

    public function many_to_many_data(Request $request)
    {
        // dd($request->all());

        $std = Student::find(1);
        // $std->course()->attach($request->course_id);
        // $std->course()->detach($request->course_id);
        $std->course()->sync($request->course_id);
        return redirect()->back();
    }
}