<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form(){
        return view('guests.contacts');
    }

    public function send(Request $request){
        $validateData = $request->validate([
            'full_name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);

        $contact = Contact::create($validateData);
        // return (new ContactFormMail($contact))->render();

        Mail::to('admin@example.com')->send(new ContactFormMail($contact));
        return redirect()
                ->back()
                ->with('message', "Success, thanks for your email, we'll try to reply within 48hours!");
    }
}

