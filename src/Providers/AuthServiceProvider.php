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
                $router->get('/authorizention', [
                    'uses' => 'AuthorizationController@authorize',
                    'as' => 'passport.authorizations.authorize',
                ]);
            }
        );
        // Route::name('passport.authorizations.authorize')
        //     ->middleware('auth')
        //     ->get('/authorize', [
        //         AuthorizationController::class,
        //         'authorize'
        //     ]);
        // Passport::tokensCan([]);
    }
    public function register()
    {
    }
}