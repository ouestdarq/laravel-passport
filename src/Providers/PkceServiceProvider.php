<?php

namespace ProxyMurder\LaravelPassportOAuth\Providers;

use ProxyMurder\LaravelPassportOAuth\HelloWorld;
use Illuminate\Support\ServiceProvider;

class PkceServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadViewsFrom(proxymurder_passport('resources/views'), 'passport-pkce');
		$this->publishes([
			proxymurder_passport('resources/views') => resource_path('views/vendor/passport-pkce'),
		], 'passport-pkce-views');
	}

	public function register()
	{
		$this->app->bind('proxymurder-passport', function () {
			return new HelloWorld;
		}, false);
	}
}