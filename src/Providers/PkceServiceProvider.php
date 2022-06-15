<?php

namespace WincOops\LaravelPassportPkce\Providers;

use WincOops\LaravelPassportPkce\HelloWorld;
use Illuminate\Support\ServiceProvider;

class PkceServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadViewsFrom(package_path('views'), 'passport-pkce');
		$this->publishes([
			package_path('views') => resource_path('views/vendor/passport-pkce'),
		], 'passport-pkce-views');
		$this->publishes([
			package_path('config/passport-pkce.php') => base_path('config/passport-pkce.php')
		], 'passport-pkce-config');
	}

	public function register()
	{
		$this->app->bind('laravel-passport', function () {
			return new HelloWorld;
		}, false);

		$this->mergeConfigFrom(package_path('config/passport-pkce.php'), 'passport-pkce');
	}
}