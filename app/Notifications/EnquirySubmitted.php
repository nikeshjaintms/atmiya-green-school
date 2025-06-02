<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EnquirySubmitted extends Notification
{
    use Queueable;
    protected $enquiry;
    /**
     * Create a new notification instance.
     */
    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
    public function toDatabase($notifiable): array
    {
        return [
            'title' => 'New Enquiry Submitted',
            'message' => $this->enquiry->name . ' has submitted a new enquiry.',
            'enquiry_id' => $this->enquiry->id,
            'submitted_at' => now(),
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */

    public function toArray($notifiable)
    {
        return [
            'enquiry_id' => $this->enquiry->id,
            'title' => 'New Enquiry',
            'message' => $this->enquiry->name . ' submitted an enquiry.',
        ];
    }
}
