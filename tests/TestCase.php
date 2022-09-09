<?php

namespace ProxyMurder\LaravelPassport\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ProxyMurder\LaravelPassport\AuthServiceProvider::class,
            ProxyMurder\LaravelPassport\PkceServiceProvider::class,
            ProxyMurder\LaravelPassport\RouteServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            "Auth" => ProxyMurder\LaravelPassport\Facades\Auth::class
        ];
    }
}