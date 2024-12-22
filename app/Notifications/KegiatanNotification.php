<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Berkayk\OneSignal\OneSignalFacade as OneSignal;

class KegiatanNotification extends Notification
{
    use Queueable;

    protected $kegiatan;

    public function __construct($kegiatan)
    {
        $this->kegiatan = $kegiatan;
    }

    public function via($notifiable)
    {
        return ['onesignal'];
    }

    public function toOneSignal($notifiable)
    {
        // Create OneSignal notification content
        $message = "A new kegiatan has been added or updated: " . $this->kegiatan->title;

        // Send notification to all users (you can adjust the audience)
        return OneSignal::sendNotificationToAll(
            $message,
            ['url' => url("/kegiatan/{$this->kegiatan->id}")]
        );
    }
}
