<?php

use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use App\Notifications\NewApplicationNotification;

Route::view('/', 'welcome');

Route::get('/notification',function(){

    Notification::send(User::first(), new NewApplicationNotification());
    
});