<?php

namespace Jiny\Hello\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name){
        //
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( config("hello.send_email_to") )
            ->markdown('hello::hello.email')
            ->with([
                'message' => $this->message,
                'name' => $this->name
            ]);
    }
}
