<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //send function
    public function send() {
        $demo = new \stdClass();
        $demo -> receiver = 'Admin';
        $demo -> sender = 'Zhasyl Land';
        Mail::to('aknrdlt@gmail.com')->send(new DemoMail($demo));

        return back();
    }
}
