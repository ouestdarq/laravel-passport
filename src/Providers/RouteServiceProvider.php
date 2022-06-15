<?php

namespace WincOops\LaravelPassportPkce\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')
                ->domain(config('passport-pkce.subdomain') . '.' . config('app.url'))
                ->prefix(config('passport-pkce.prefix'))
                ->group(package_path('routes/web.php'));

            Route::middleware('api')
                ->domain(config('passport-pkce.subdomain') . '.' . config('app.url'))
                ->prefix('/api')
                ->group(package_path('routes/api.php'));
        });
    }
}