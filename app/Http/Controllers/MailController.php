<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Exception;

class MailController extends Controller
{
    //send function
    public function send(Request $request): \Illuminate\Http\RedirectResponse
    {
        $demo = new \stdClass();
        $data = $request->validate([
            'name' => 'bail|required',
            'phone' => 'bail|required',
            'message' => 'bail|required'
        ]);

        if($data == true){
            $demo -> name = $request-> input('name');
            $demo -> phone = $request-> input('phone');
            $demo -> message = $request-> input('message');
            $demo -> sender = 'Zhasyl Land';
            Mail::to('aknrdlt@gmail.com')->send(new DemoMail($demo));

        }else{
            throw new Exception(' Заполните!');
        }
        return back();
    }
}
