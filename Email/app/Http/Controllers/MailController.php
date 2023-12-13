<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\DemoMail;





class MailController extends Controller

{

    public function index() 

    { 

        $mailData = [ 

            // title, body --> blade hivatkozik rá 

            'title' => 'FOREACH :D Mail from your_email.com', 

            'body' => 'This is for testing email using smtp.' 

        ]; 

 
 

        foreach ([ 

            "patrikhamar460@gmail.com", "beasuhi333@gmail.com", "kissadam990202@gmail.com", "my.temporary.test.mailbox+vajon.kell.a.pluszjel@gmail.com", 

            "testemil9779@gmail.com", "tesztmarci96@gmail.com", "tesztbibanka@gmail.com", "foloslegesideirni@gmail.com", "tesztmariann7474@gmail.com", 

            "eakos2131@gmail.com", "tesztgyongyiteszt@gmail.com", "t3szt3l3m@gmail.com", "testszzoli2023@gmail.com", 

        ] as $recipient) { 

 
 

            Mail::to($recipient) 

                ->send(new DemoMail($mailData)); 

        } 

        dd("Email is sent successfully."); 

    } 

 
}