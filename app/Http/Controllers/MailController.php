<?php

namespace App\Http\Controllers;

use App\Mail\HomeQuestionForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendHomeQuestionForm(Request $request)
    {
        $request->all();
        $mailData = [
            'subject' => 'Mail from home question from',
            'title' => 'Mail from home question from',
            'body' => 'Mail from home question from',
            "name" =>  $request->input('name'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone'),
            "company" => $request->input('company'),
            "details" => $request->input('details'),
        ];

        Mail::to('slusarsu@gmail.com')->send(new HomeQuestionForm($mailData));

        return back()->with('mail-sent', 'mail sent');
    }
}
