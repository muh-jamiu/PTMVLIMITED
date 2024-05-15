<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use App\Services\Multipart;
use App\Services\TimbuAPI;
use App\Services\TypesenseAPI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class SuppliersController extends Controller
{
    public function __construct()
    {
    }

    public function sendMail(Request $request){
        $name = strtoupper($request->name);
        $message = $request->message;
        $email = $request->email;
        $subject = strtoupper($request->subject);

        $mail = Mail::to('ptmvlimited@gmail.com')->send(new MyMail($message, $subject, $email, $name));
        if(!$mail){
            return back()->with("error_msg", "Soemthing went wrong, Please try again later!!");
        }

        return back()->with("success_msg", "Message was sent, We will get back to you shortly");
    }
}
