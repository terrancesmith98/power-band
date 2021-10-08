<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Mail\Gmail;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        $email = $request['email'];

        $details = [
            'title' => $request['subject'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'body' => $request['message']
        ];

        Mail::to('info@powermusic.band', 'terrancesmith98@gmail.com')->send(new Gmail($details));

        return back()->with('success', 'We have received your message and would like to thank you for reaching out to us.');
    }
}