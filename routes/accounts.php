<?php

use Illuminate\Support\Facades\Route;
use Woops\LaravelPassport\Http\Controllers\AuthenticationController;

Route::view('login', 'passport-pkce::login');

Route::name('login')
    ->middleware('guest')
    ->post('/login', [
        AuthenticationController::class,
        'login',
    ]);