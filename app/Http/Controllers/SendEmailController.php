<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
    function index() {
        return view('send_email');
    }

    function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'massage' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'email' =>  $request->email,
            'massage' => $request->massage
        );

        Mail::to("magzhannurb21@gmail.com")->send(new SendMail($data));
        return back()->with('success', 'Thank you for sending us a message!');
    }
}
