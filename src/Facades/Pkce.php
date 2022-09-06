<?php

namespace Woops\LaravelPassport\Facades;

use Illuminate\Support\Facades\Facade;

class Pkce extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'oauth-pkce';
    }
}