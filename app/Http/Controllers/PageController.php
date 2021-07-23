<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('guests.welcome');
    }

    public function about() {

    }

    public function contacts(){
        return view('guests.contacts.index');
        
    }
    public function sendForm(Request $request)
    {   
     $validatedData = $request->validate([
         'name' => 'required',
         'email' => 'required',
         'body' => 'required'
     ]);
        Mail::to('beraldo.riccardo@gmail.com')
        ->cc($validatedData['email'])
        ->send(new ContactFormMail($validatedData));
    return redirect()->back()->with('message', 'Message sent successfully');
    }
}
