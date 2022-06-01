<?php

use Illuminate\Support\Facades\Route;
use WincOops\PassportPkce\Http\Controllers\AuthenticationController;
use WincOops\PassportPkce\Http\Controllers\AuthorizationController;


Route::view('/login', 'passport-pkce::login');

Route::name('login')
    ->middleware('guest')
    ->post('/login', [
        AuthenticationController::class,
        'login',
    ]);

Route::name('passport.authorizations.authorize')
    ->middleware('auth')
    ->get('/authorize', [
        AuthorizationController::class,
        'authorize'
    ]);