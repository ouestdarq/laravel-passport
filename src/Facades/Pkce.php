<?php

namespace ProxyMurder\LaravelPassportOAuth\Facades;

use Illuminate\Support\Facades\Facade;

class Pkce extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'proxymurder-passport';
    }
}