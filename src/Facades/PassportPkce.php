<?php

namespace WincOops\PassportPkce\Facades;

use Illuminate\Support\Facades\Facade;

class PassportPkce extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'passport-pkce';
    }
}