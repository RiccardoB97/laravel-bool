<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

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
        return (new ContactFormMail($contact))->render();
    }
}

