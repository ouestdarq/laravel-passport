<?php

namespace Woops\LaravelPassport\Providers;

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
                        ->group(package_path('routes/accounts.php'));

                    Route::prefix('/oauth')
                        ->group(package_path('routes/oauth.php'));
                });

            Route::middleware('api')
                ->prefix('/api')
                ->group(package_path('routes/api.php'));
        });
    }
}