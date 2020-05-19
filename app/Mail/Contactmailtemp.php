<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactmailtemp extends Mailable
{
    public $contactmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactmail)
    {
        $this->contactmail = $contactmail;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('labswebsite@gmail.com')->subject('Prise de contact')->markdown('mail.contactmail', compact('contactmail'));
    }
}
