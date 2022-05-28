<?php

use Illuminate\Support\Facades\Route;

Route::get('winc-oops', function () {
    return response()->json([
        'status' => 200,
        'src_dir' => src_dir(),
        'package_dir' => package_dir()
    ]);
});