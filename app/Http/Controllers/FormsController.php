<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    // موصول كل المعلومات الموجودة في ال form
    public function form1_data(Request $request)
    {
        //  return 'Done';
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name'));
        // dd($request->only(['name', 'Age']));
        /* $name = $request->input('name');
        dd($name); */

        $name  = $request->name;
        $Age = $request->Age;

        return "Welcome $name ,Your age is $Age";
    }

    public function form2()
    {
        return view('forms.form2');
    }


    public function form2_data(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Age' => 'required',
        ]);

        $name = $request->name;
        $Email = $request->Email;
        $Password = $request->Password;
        $Age = $request->Age;

        return view('forms.form2_data', compact('name', 'Email', 'Password', 'Age'));
        dd($request->all());

        //   dd($request->only(['name', 'Password']));
    }

    public function form3()
    {
        return view('forms.form3');
    }


    public function form3_data(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'Email' => 'required',
        ]);

        $name = $request->name;
        $Email = $request->Email;
        return view('forms.form3_data', compact('name', 'Email'));
        dd($request->all());
    }
}