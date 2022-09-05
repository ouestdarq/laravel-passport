<?php

use Illuminate\Support\Facades\Route;
use Woops\LaravelPassport\Http\Controllers\AuthorizationController;

Route::name('passport.authorizations.authorize')
    ->middleware('auth')
    ->get('/authorize', [
        AuthorizationController::class,
        'authorize'
    ]);