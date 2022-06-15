<?php

use Illuminate\Support\Facades\Route;
use WincOops\LaravelPassportPkce\Http\Controllers\AuthenticationController;

Route::name('/logout')
    ->middleware('auth:api')
    ->post('/logout', [
        AuthenticationController::class,
        'logout'
    ]);