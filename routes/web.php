<?php

use Illuminate\Support\Facades\Route;

use LaravelersAcademy\ZoomMeeting\Facades\Meeting;

Route::get('/', function () {


    $account = '7czFSoA-REqftiQFvFSqhg';

    $client = 'VRSGjLeiRuozqgAu4FLzg';

    $secret = 'o6bYtv44x54ToiuuB8tYJ7sIXEFB7xqM';

    $meetingId = 89217991969;

    dd(Meeting::get($meetingId));

    //////////////////////////
    //////////////////////////
    //////////////////////////

    try {

        $res = Meeting::set([
            'account' => $account,
            'client' => $client,
            'secret' => $secret
        ])->create([
            'topic' => 'Mi reunión de la api de paquete'
        ]);

    } catch( \Exception $e) {

        dd($e);

    }

    dd($res);

});
