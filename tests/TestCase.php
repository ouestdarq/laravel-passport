<?php

namespace WincOops\LaravelPassportPkce\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            WincOops\LaravelPassportPkce\AuthServiceProvider::class,
            WincOops\LaravelPassportPkce\PkceServiceProvider::class,
            WincOops\LaravelPassportPkce\RouteServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            "LaaravelPassport" => WincOops\LaravelPassportPkce\Facades\LaravelPassport::class
        ];
    }
}