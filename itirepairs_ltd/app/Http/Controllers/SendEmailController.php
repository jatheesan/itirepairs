<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function sendcontactmail(Request $request)
    {
        $this-> validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $mail_data = array(
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
            'subject' => $request->subject
        );

        //dd($mail_data);

        Mail::to('boxroomrent@gmail.com')->send(new ContactMail($mail_data));

        return back()->with('success', 'thanks for contacting us!');
    }
}
