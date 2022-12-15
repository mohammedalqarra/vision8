<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\User;

use Illuminate\Http\Request;

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
}