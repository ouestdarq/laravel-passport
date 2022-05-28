<?php

use Illuminate\Support\Facades\Route;
use WincOops\PassportPkce\Http\Controllers\AuthController;
use WincOops\PassportPkce\Http\Controllers\AuthorizationController;


Route::view('login', 'passport-pkce::login');

Route::name('login')
    ->middleware('guest')
    ->post('/login', [
        AuthController::class,
        'login',
    ]);

Route::name('passport.authorizations.authorize')
    ->middleware('auth')
    ->get('/authorize', [
        AuthorizationController::class,
        'authorize'
    ]);