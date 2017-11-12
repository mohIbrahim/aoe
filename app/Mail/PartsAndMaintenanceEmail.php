<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PartsAndMaintenanceEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $partsNames, $name, $phoneNumber, $email, $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($partsName, $name, $phoneNumber, $email, $message)
    {
        $this->partsNames   = $partsName;
        $this->name         = $name;
        $this->phoneNumber  = $phoneNumber;
        $this->email        = $email;
        $this->message      = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails\parts_and_maintance_email');
    }
}
