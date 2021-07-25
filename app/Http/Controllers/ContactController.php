<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form(){
        return view('guests.contact');
    }

    public function send(Request $request){
        $validateData = $request->validate([
            'full_name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);
    }
}

