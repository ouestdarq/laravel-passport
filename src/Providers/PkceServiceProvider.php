<?php

namespace Woops\LaravelPassport\Providers;

use Woops\LaravelPassport\HelloWorld;
use Illuminate\Support\ServiceProvider;

class PkceServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadViewsFrom(package_path('views'), 'passport-pkce');
		$this->publishes([
			package_path('views') => resource_path('views/vendor/passport-pkce'),
		], 'passport-pkce-views');
	}

	public function register()
	{
		$this->app->bind('oauth-pkce', function () {
			return new HelloWorld;
		}, false);
	}
}