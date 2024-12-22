<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Berkayk\OneSignal\OneSignalFacade as OneSignal;

class NotificationController extends Controller
{
    public function sendNotification()
    {
        $response = OneSignal::sendNotificationToAll(
            "This is a test notification",
            $url = null,
            $data = null,
            $buttons = null,
            $schedule = null
        );

        return response()->json($response);
    }
}
