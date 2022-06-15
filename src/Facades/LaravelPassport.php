<?php

namespace WincOops\LaravelPassportPkce\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelPassport extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'laravel-passport';
    }
}