<?php

namespace WincOops\PassportPkce\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use WincOops\PassportPkce\Facades\PassportPkce;
use WincOops\PassportPkce\PassportPkceServiceProvider;
use WincOops\PassportPkce\RouteServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PassportPkceServiceProvider::class,
            RouteServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            "PassportPkce" => PassportPkce::class
        ];
    }
}