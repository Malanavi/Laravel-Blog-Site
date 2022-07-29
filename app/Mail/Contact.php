<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    public $comment;

    public function __construct($name, $phone, $email, $comment)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->comment = $comment;
    }

    public function build()
    {
        return $this
            ->from($address = 'dwhthrs@gmail.com', $name = 'Мир Вольта')
            ->subject('Заявка клиента')
            ->view('emails.contact');
    }
}
