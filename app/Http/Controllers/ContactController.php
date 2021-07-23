<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use App\Contact;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message'=> 'required'
        ]);
 
        $mail = Contact::create($data);
        $to = 'admin@example.com';
        Mail::to($to)->send(new ContactFormMail($mail));
    }
}
