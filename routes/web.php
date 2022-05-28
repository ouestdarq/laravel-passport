<?php

use Illuminate\Support\Facades\Route;

Route::get('winc-oops', function () {
    return response()->json([
        'status' => 200,
        'test' => test_helper()
    ]);
});