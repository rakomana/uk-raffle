<?php

namespace App\Notifications\User\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class Success extends Notification
{
    use Queueable;

    /**
     * @var $order
    */
    public $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("Payment Confirmation")
            ->greeting("Hi {$notifiable->name} ,")
            ->line("Thank you, we've received your order {$this->order} ")
            ->line("Your order is being processed and your estimated date is within 14 days from now.")
            ->line("Once your order is ready to be delivered, you will receive an email notification confirming your scheduled delivery.")
            ->action('Manage Order', url('http://127.0.0.1:8000/login'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
