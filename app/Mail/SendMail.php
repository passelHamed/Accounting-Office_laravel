<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $company;
    public $mailMessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$company,$mailMessage)
    {
        $this->name = $name;
        $this->company = $company;
        $this->mailMessage = $mailMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Accounting Office')->view('mail.SendMail' , [$this->name,$this->company , $this->mailMessage]);
    }
}
