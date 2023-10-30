<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
class ContactController extends Controller
{

    public function sendEmail(ContactRequest $request)
    {
        $mailData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];

        $mailToAddress  = env('MAIL_TO_ADDRESS');
        Mail::to($mailToAddress)->send(new ContactFormMail($mailData));

        return redirect()->back()->with('success', 'Նամակը հաջողությանբ հաստատվեց, խնդրում ենք սպասել պատասխանի։');
    }
}
