<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        return view('home');
    }

    public function contactUs(){
        return view('contactPage');
    }

    public function contactSubmit(request $request){

        $name=$request->input('name');
        $email=$request->input('email');
        $text=$request->input('text');

        $dataToSend= compact('name', 'email', 'text');

        Mail::to($email)->send(new ContactMail($dataToSend));

        return redirect(route('home'))->with('message', 'Congralutazioni hai inviato la mail correttamente!');

    }
    
}
