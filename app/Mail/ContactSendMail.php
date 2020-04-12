<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($inputs)
    {
        $this->email = $inputs['email'];
        $this->name = $inputs['name'];
        $this->comment = $inputs['comment'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to('testsite854@gmail.com')
            ->from('testsite854@gmail.com')
            ->subject('自動送信メール')
            ->view('contacts.mail')
            ->with([
                'email' => $this->email,
                'name' => $this->name,
                'comment'  => $this->comment,
            ]);
        }
}
