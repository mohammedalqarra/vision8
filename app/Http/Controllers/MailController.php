<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Rules\CheckWord;
use App\Mail\ContactUSMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::to('admin@gmail.com')->send(new TestMail());
        return 'Done';
    }

    public function contact_us()
    {
        return view('forms.contact_us');
    }



    public function contact_us_data(Request $request)
    {
        $request->validate([
            'fname' => ['required', new CheckWord(3, 'This is long name just Two name')],
            'lname' => 'required',
            'email' => 'required | ends_with:gmail.com',
            'phone' => 'required',
            'message' => 'required',
            'cv' => 'required',

        ]);

        $data = $request->except('_token');

        $cv_new_name = rand() . time() . $request->file('cv')->getClientOriginalName();

        $request->file('cv')->move(public_path('uploads'), $cv_new_name);
        $data['cv'] = $cv_new_name;
        //dd($request->all());
        Mail::to('contact@vision.com')->send(new ContactUSMail($data));
        return 'Done';
    }
}