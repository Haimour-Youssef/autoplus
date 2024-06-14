<?php

namespace App\Mail;



use Illuminate\Mail\Mailable;


class ContactMarkdown extends Mailable
{


    public $data = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Nouvelle visiteur sur Autoplus.ma ";
        return $this
        ->subject($subject)
        ->markdown('emails.contact-markdown');
    }
}
