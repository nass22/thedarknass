<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        $content = [
            'name' => $request->input('cName'),
            'email' => $request->input('cEmail'),
            'website' => $request->input('cWebsite'),
            'message' => $request->input('cMessage')
        ];
        Mail::to('nacer.smr@gmail.com')->send(new Contact($content));

        

    }
}

