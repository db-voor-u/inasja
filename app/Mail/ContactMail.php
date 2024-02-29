<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($name, $email, $userMessage)
    {
        $this->details = [
            'name' => $name,
            'email' => $email,
            'userMessage' => $userMessage
        ];
    }

    public function build()
    {
        return $this->view('emails.contact_mail')
            ->with('details', $this->details);
    }
}
