<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryFormAdminMail extends Mailable
{
    use Queueable, SerializesModels;
   public $enquiry;
    /**
     * Create a new message instance.
     */
    public function __construct($enquiry)
    {

        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->subject('Thank you for Enquiry us')
            ->view('emails/enquiryForm_to_admin')
            ->with('data', $this->enquiry);
    }

    /**
     * Get the message envelope.
     */
    //public function envelope(): Envelope
    //{
    //    return new Envelope(
    //        subject: 'Enquiry Form Admin Mail',
    //    );
    //}

    /**
     * Get the message content definition.
     */
    //public function content(): Content
    //{
    //    return new Content(
    //        view: 'emails/enquiryForm_to_admin',
    //    );
    //}

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    //public function attachments(): array
    //{
    //    return [];
    //}
}
