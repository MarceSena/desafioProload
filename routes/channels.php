<?php

use Illuminate\Support\Facades\Broadcast;
namespace App\Broadcasting\Channels\Message\WhatsAppMessage;
namespace App\Broadcasting\Channels\Message\WhatsAppChannel;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('messages.{message}', WhatsAppMessage::class);