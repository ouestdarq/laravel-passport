<?php

namespace Woops\LaravelPassport\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            Woops\LaravelPassport\AuthServiceProvider::class,
            Woops\LaravelPassport\PkceServiceProvider::class,
            Woops\LaravelPassport\RouteServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            "Pkce" => Woops\LaravelPassport\Facades\Pkce::class
        ];
    }
}