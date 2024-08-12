<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('ayushkathariya7@gmail.com')->send(new WelcomeMail(['name' => 'Ayush Kathariya']));

        return "Email Sent Successful";
    }
}
