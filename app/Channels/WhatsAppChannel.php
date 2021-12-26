<?php
namespace App\Channels;

use Illuminate\Notifications\Notification;
use Twilio\Rest\Client;

class WhatsAppChannel
{
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toWhatsApp($notifiable);
        print_r($notifiable);
        exit;
        $to = $notifiable->routeNotificationFor('WhatsApp'); 
        $to = +254726076333;      
        $from = config('services.twilio.whatsapp_from');


        $twilio = new Client(config('services.twilio.sid'), config('services.twilio.token'));


        return $twilio->messages->create('whatsapp:' . $to, [
            "from" => 'whatsapp:' . $from,
            "body" => $message->content
        ]);
    }
}