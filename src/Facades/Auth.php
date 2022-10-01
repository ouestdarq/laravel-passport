<?php

namespace ProxyMurder\LaravelPassport\Facades;

use Illuminate\Support\Facades\Facade;

class Auth extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'laravel-passport';
    }
}