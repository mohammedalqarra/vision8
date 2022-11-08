<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckWordCount;
use App\Rules\CheckWordCounts;

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

    public function form4()
    {
        return view('forms.form4');
    }


    public function form4_data(Request $request)
    {

        $request->validate([
            // 'name' => 'required | min:3 | max:20',
            // 'name' => ['required', 'min:3', 'max:20'],
            // 'name' => ['required', new CheckWordCount(5)],
            'name' => ['required', new CheckWordCount(3, 'is the length of the name')],
            'email' => 'required | email | ends_with:gmail.com',
            'password' => 'required|confirmed|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            // 'password' => ['required', 'string', 'max:255', 'min:8', 'confirmed', 'regex:/[0-9]/', 'regex:/[a-z]/', 'regex:/[A-Z]/'],
            'bio' => ['required', new CheckWordCount(100, 'The validation error message.')],
        ]);

        dd($request->all());
    }
    public function form5()
    {
        // $alpha = range('a', 'z');
        // dd($alpha);
        // dd($alpha[rand(0, 25)]);
        return view('forms.form5');
    }


    public function form5_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cv' => 'required',
        ]);
        $alpha = range('a', 'z');
        // $img_name = $request->file('cv')->getClientOriginalName();
        $ex = $request->file('cv')->getClientOriginalExtension();
        $img_name = rand() . time() . '_'  . $alpha[rand(0, count($alpha) - 1)] . rand() . '.' . $ex;
        // nameimg => randimg().extension;
        //لو أرتفع أنقله على ال public ولو الملف مش موجود بنشأه
        $request->file('cv')->move(public_path('uploads'), $img_name);

        dd($request->all());
    }

    public function form6()
    {
        //      $alpha = range('a', 'z');
        // dd($alpha);

        // // dd($alpha[rand(0, 25)]);
        return view('forms.form6');
    }

    public function form6_data(Request $request)
    {
        $request->validate([
            'name' => ['required', new CheckWordCounts(4, 'is the name length just 4 word ')],
            'email' => 'required | email | ends_with:gmail.com',
            // 'password' => 'required | confirmed | min:6 | regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'password' => 'required | confirmed | min:6 ',
            'bio' => ['required ', new CheckWordCounts(100, 'The validation error message is the length of the textarea.')],
            'cv' => 'required',
        ]);

        //    $request->file('cv')->move(public_path('uploads'));
        $img_names = $request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads'), $img_names);

        dd($request->all());
    }
}