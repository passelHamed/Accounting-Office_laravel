<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($this->isOnline()) {
            $mailData=[
                'ToEmail' => 'passelhamed50@gmail.com',
                'FromEmail' => $request->email,
                'FromName' => $request->name,
                'subject'  => $request->subject,
                'mailMessage' => $request->message,
            ];

            Mail::send('mail.SendMail',$mailData,function($message) use ($mailData){
                $message->to($mailData['ToEmail'])
                        ->from($mailData['FromEmail'],$mailData['FromName'])
                        ->subject($mailData['subject']);
            });

            return redirect()->back()->with('success' , 'Email Sent');

        }else {
            return redirect()->back()->withInput()->with('error' , 'Check Your Internet Connection');
        }
    }


    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }
}
