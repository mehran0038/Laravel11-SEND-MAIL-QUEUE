<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;

class HelloController extends Controller
{
    public function sendHelloMail()
    {
        $title = 'Hello Mail from Tutsmake.com';
        $body = 'This is the first email to send in laravel 11 application from tutsmake.com';

        Mail::to('your-recipient@domain.com')->queue(new HelloMail($title, $body));

        return "Email has been sent successfully!";
    }
}