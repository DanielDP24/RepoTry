<?php
use Illuminate\Support\Facades\Route;
use Twilio\TwiML\VoiceResponse;


Route::get('/call', function () {

    $response = new VoiceResponse();
    $response->say('The stream has started.');

    $start = $response->start();
    $start->stream(['name' => 'Example Audio Stream', 'url' => 'ws://54.247.29.41:8001/app/1w6mn4hvxxanc87l7itf']);
    $response->say('The stream has started.');
    echo $response;


    $start()->stop();
});
