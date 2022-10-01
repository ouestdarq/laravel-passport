<?php

use Illuminate\Support\Facades\Route;
use ProxyMurder\LaravelPassport\Http\Controllers\AuthenticationController;

Route::view('login', 'proxymurder/laravel-passport::login');

Route::name('login')
    ->middleware('guest')
    ->post('/login', [
        AuthenticationController::class,
        'login',
    ]);