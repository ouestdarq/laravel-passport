<?php

namespace ProxyMurder\LaravelPassport\Providers;

use ProxyMurder\LaravelPassport\HelloWorld;
use Illuminate\Support\ServiceProvider;

class OAuthServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadViewsFrom(proxymurder_passport('resources/views'), 'proxymurder-passport');
		$this->publishes([
			proxymurder_passport('resources/views') => resource_path('views/vendor/proxymurder/laravel-passport'),
		], 'proxymurder-passport-views');
	}

	public function register()
	{
		$this->app->bind('proxymurder-passport', function () {
			return new HelloWorld;
		}, false);
	}
}