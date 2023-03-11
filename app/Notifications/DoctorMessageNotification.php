<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DoctorMessageNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $message = null;
    public function __construct($message)
    {
        //
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }
    public function toDatabase($notifiable)
    {
        return  [
            'link' => "/doctor/messages",
            'message' => "New patient message",
            'data' => json_encode($this->message),
        ];
    }
}
