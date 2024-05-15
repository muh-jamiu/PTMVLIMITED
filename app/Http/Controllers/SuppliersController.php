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

    public function sendMail(){
        Mail::to('recipient@example.com')->send(new MyMail("testing msg", "Contact Email", "test@gmail.com", "test"));
        return true;
    }
}
