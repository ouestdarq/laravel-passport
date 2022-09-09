<?php

use Illuminate\Support\Facades\Route;
use ProxyMurder\LaravelPassportOAuth\Http\Controllers\AuthorizationController;

Route::name('passport.authorizations.authorize')
    ->middleware('auth')
    ->get('/authorize', [
        AuthorizationController::class,
        'authorize'
    ]);