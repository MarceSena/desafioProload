<?php

namespace App\Broadcasting\Channels\Message;

use App\Models\User;

class WhatsAppMessage
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
    public function join(User $user, Message $message)
    {
        return $user->id === $message->user_id;
    }

//https://www.twilio.com/blog/create-laravel-php-notification-channel-whatsapp-twilio
    //https://laravel.com/docs/8.x/broadcasting
    //https://laravel.com/docs/8.x/notifications#custom-channels
}
