<?php

namespace ProxyMurder\LaravelPassport\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')->group(function () {
                Route::group(
                    proxymurder_passport_dir('routes/accounts.php')
                );

                // Route::prefix('/oauth')
                //     ->group(proxymurder_passport_dir('routes/oauth.php'));
            });

            Route::middleware('api')
                ->prefix('/api')
                ->group(
                    proxymurder_passport_dir('routes/api.php')
                );
        });
    }
}
