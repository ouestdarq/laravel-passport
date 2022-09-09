<?php

namespace ProxyMurder\LaravelPassportOAuth\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(function () {
                    Route::prefix('/accounts')
                        ->group(proxymurder_passport('routes/accounts.php'));

                    Route::prefix('/oauth')
                        ->group(proxymurder_passport('routes/oauth.php'));
                });

            Route::middleware('api')
                ->prefix('/api')
                ->group(proxymurder_passport('routes/api.php'));
        });
    }
}