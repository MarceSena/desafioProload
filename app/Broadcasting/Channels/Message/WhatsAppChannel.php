<?php

namespace App\Broadcasting\Channels\Message;

use Illuminate\Notifications\Notification;
use App\Models\User;

class WhatsAppChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\Models\User  $user
     * @return array|bool
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toWhatsApp($notifiable);

        $to = $notifiable->routeNotificationFor('WhatsApp');
        
        $from = conf('services.zapito.url');
        
        $zapito = new Client(config('services.zapito.url'), config('services.zapito.token'));
        
        return $zapito-> message ->create('whatsapp: ' . $to [ 
            "from" => 'whatsapp:' . $from,
            "body" => $message->content
        ]);
    }
}
