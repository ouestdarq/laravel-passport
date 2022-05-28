<?php

use Illuminate\Support\Facades\Route;
use WincOops\PassportPkce\Http\Controllers\AuthController;

Route::name('/logout')
    ->middleware('auth:api')
    ->post('/logout', [
        AuthController::class,
        'logout'
    ]);