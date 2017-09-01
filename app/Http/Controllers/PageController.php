<?php

namespace App\Http\Controllers;
Use App\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Mail\Mailer;
use App\User;
use \App\Mail\ContactForm;
$mailer = app()['mailer'];


class PageController extends Controller
{
     public function getAbout()
    {
     return view('pages.about');  
    }

    public function getContact(Request $request)
    {
    $useremail= $request->useremail;
    // dd($request);
    //  $useremail= $mail;
    return view('pages.contact', compact('useremail'));  
    }

    public function getContactEmail(Request $request)
    {
        
    //   Mail::send('emails.ContactForm', ['title' => $request->subject, 'message' => $request->message], function ($message)
    //  {
    //     $message->from('contact@volunteers.com', 'Volunteers');
    //     $message->to($request->useremail);
    // });
    }

    public function getDashboard()
    {
     return view('dashboard.index');
    }   

    public function sendEmail(Request $request) 
    {
      $user = User::where('email', '=', $request->email)->first();

      // dd($user);
        \Mail::to($user)->send(new ContactForm($user));
    } 


}
