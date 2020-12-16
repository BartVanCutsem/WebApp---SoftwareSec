<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MakingContact;
use Illuminate\Support\Facades\Mail;


class MakingContactController extends Controller
{
    public function MakeContact(Request $request) { 

        $name = $request->name; 
        $email = $request->email; 
        $subject = $request->subject; 
        $message = $request->message; 
        
        $details = [
            "name" => $name, 
            "subject" => $subject, 
            "message" => $message,
        ] ;
        // var_dump( $details); 
        Mail::to($email)->send(new MakingContact($details));
        return redirect()->route('home');
    }
}
