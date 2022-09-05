<?php

namespace Woops\LaravelPassport\Providers;

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
            },
            [
                'domain' => config('passport-pkce.subdomain') . '.' . config('app.url'),
                'prefix' => config('passport-pkce.prefix'),
            ]
        );

        // Passport::tokensCan([]);
    }
    public function register()
    {
    }
}