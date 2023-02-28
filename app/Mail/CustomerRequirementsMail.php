<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerRequirementsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData,$CartItems;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$CartItems)
    {
        //
        $this->mailData = $mailData;
        $this->CartItems = $CartItems;

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Customer Requirements Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    // public function content()
    // {
    //     return new Content(
    //         markdown: 'Email.CustReqsMail',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    // public function attachments()
    // {
    //     return [];
    // }
    /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
       return $this->markdown('Email.CustReqsMail')
             ->with('mailData', $this->mailData)
             ->with('CartItems',$this->CartItems);
   }
}
