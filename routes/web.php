<?php

use App\Events\Example;
use Illuminate\Support\Facades\Route;



Route::get('/broadcast', function () {
    
    broadcast(new Example());
});

Route::get('/', function () {
    
    return view('welcome');
});
