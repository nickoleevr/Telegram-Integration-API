<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Carbon\Carbon;
class notifications extends Notification
{


    public function via(object $notifiable): array
    {
        return [TelegramChannel::class];
    }

    public function toTelegram(object $notifiable)
    {
        $date = Carbon::now('America/Sao_Paulo')->format(' d/m/y - H:i');
        return TelegramMessage::create()
            ->content("Teste de Notificação - Gerado em: " . $date);

    }

}
