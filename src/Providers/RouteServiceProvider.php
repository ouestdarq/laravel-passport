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
                        ->group(woops_laravel_passport('routes/accounts.php'));

                    Route::prefix('/oauth')
                        ->group(woops_laravel_passport('routes/oauth.php'));
                });

            Route::middleware('api')
                ->prefix('/api')
                ->group(woops_laravel_passport('routes/api.php'));
        });
    }
}