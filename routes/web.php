<?php

use Illuminate\Support\Facades\Route;

use LaravelersAcademy\ZoomMeeting\Facades\Meeting;

Route::get('/', function () {

    $user = \App\Models\User::find(1);

    return $user->createToken('auth_token')->plainTextToken;

});
