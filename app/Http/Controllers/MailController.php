<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mail\Contact\SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class MailController extends Controller
{
    public function send(SendRequest $request) {
//        Mail::send(['text'=>'emails.contact'], ['name'=>'Мир Вольта'], function ($message){
//            $message->to('dwhthrs@gmail.com', 'To Dima')->subject('Тестовое письмо');
//            $message->from('dwhthrs@gmail.com', 'Dima');
//        });

        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $comment = $request->comment;

        Mail::to('dwhthrs@gmail.com')->send(new Contact($name, $phone, $email, $comment));

//        return view('index');
    }
}
