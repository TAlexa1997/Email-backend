<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;

    public function __construct($mailData)

    { {

            $this->mailData = $mailData;
        }
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demo Mail',
        );
    }


    public function content(): Content
    {
        return new Content(
            //resources/views mappán belül 
            //email nevű mappába a test.blade.php-t keresi 
            //amit ezután létre is hozunk manuálisan 
            view: 'email.test',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
