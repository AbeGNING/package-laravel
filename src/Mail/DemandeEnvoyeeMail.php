<?php

namespace AbeGning\Demande\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemandeEnvoyeeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cnib;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cnib)
    {
        $this->cnib = $cnib;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('demande::mail.demandenvoyee')->with(['carteni'=>$this->cnib]);
    }
}
