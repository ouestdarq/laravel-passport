<?php

use Illuminate\Support\Facades\Route;
use Woops\LaravelPassport\Http\Controllers\AuthenticationController;

Route::name('api.logout')
    ->middleware('auth:api')
    ->post('/logout', [
        AuthenticationController::class,
        'logout'
    ]);