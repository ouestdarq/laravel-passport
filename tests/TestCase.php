<?php

namespace WincOops\PassportPkce\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            WincOops\PassportPkce\PassportPkceServiceProvider::class,
            WincOops\PassportPkce\RouteServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            "PassportPkce" => WincOops\PassportPkce\Facades\PassportPkce::class
        ];
    }
}