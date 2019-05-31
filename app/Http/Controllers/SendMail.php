<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{
    
    public function mailContactanos(Request $request){
        
      $msg = request()->validate([
      "nombres" => "required",
      "apellidos" =>"required",
      "telefono" =>"required",
      "email" =>"required",
      "mensaje" =>"required",
    ]);
      Mail::to("hectorcetina@gmail.com")->queue(new MessageReceived($msg));

      return view("inicio");

    }
}
