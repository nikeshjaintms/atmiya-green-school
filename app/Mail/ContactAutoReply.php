<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAutoReply extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Thank you for contacting us')
            ->markdown('emails.contact.autoreply')
            ->with('data', $this->data);
    }

    /**
     * Get the message envelope.
     */
    //public function envelope(): Envelope
    //{
    //    return new Envelope(
    //        subject: 'Contact Auto Reply',
    //    );
    //}

    /**
     * Get the message content definition.
     */
    //public function content(): Content
    //{
    //    return new Content(
    //        markdown: 'emails.contact.autoreply',
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
