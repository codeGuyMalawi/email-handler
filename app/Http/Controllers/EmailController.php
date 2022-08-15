<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function index(){

    return view('welcome');


   }

   public function sendMail(request $request){


    $email=$request->email;
    $message=$request->message;
    
    Mail::to($email)->send(new testMail());
    return 'sent';

   }
}
