<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Sending data to the email view
     */
    public \stdClass $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $userData)
    {
        $this->data = $userData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Réinitialisation de mot de passe - BDE Saintonge')->view('emails.resetPassword');
    }
}
