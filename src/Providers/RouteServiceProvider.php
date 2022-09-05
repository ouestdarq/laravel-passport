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
                ->prefix('/accounts')
                ->group(package_path('routes/web.php'));

            Route::middleware('api')
                ->prefix('/api')
                ->group(package_path('routes/api.php'));
        });
    }
}