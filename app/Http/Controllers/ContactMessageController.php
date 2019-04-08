<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create() 
    
    {
        return view('contact');    
    }
    
    
     public function store(Request $request)
    {
    $this->validate($request,  [
        'name' => 'required',
        'email' => 'required|email',
        'name' => 'required'
    ]); 
    
    Mail::send('emails.contact-message', [
        'msg' => $request->message
    ], function ($mail) use($request){
        $mail->from($request->email, $request->name);
        
        $mail->to('admin@apple.com')->subject('Contact Message');
    });
        return redirect()->back()->with('flash_message', 'Merci pour votre message.');
    }
}
