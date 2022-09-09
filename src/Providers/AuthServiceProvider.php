<?php

namespace ProxyMurder\LaravelPassportOAuth\Providers;

use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Passport::routes(
            function ($router) {
                $router->forAuthorization();
                $router->forAccessTokens();
                $router->forTransientTokens();
            }
        );
    }
    public function register()
    {
    }
}