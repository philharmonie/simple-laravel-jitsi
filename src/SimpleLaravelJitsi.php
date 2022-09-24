<?php

namespace Harmoniemedia\SimpleLaravelJitsi;

class SimpleLaravelJitsi
{
    public function create_meeting_room_url(string $room_name = null)
    {
        $domain = config('simple-laravel-jitsi.domain');
        $company_name = slug(config('simple-laravel-jitsi.company_name'));
        $unique_rooms = slug(config('simple-laravel-jitsi.unique_rooms'));

        if ($room_name) {
            $room_name = slug($room_name);
        }

        if ($unique_rooms) {
            $room_name = $company_name . '/' . $room_name . (!$room_name ? '' : '_') . time();
        }

        return 'https://' . $domain . '/' . $room_name;
    }
}
