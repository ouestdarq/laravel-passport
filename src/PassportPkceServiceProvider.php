<?php

namespace WincOops\PassportPkce;

use Illuminate\Support\ServiceProvider;

class PassportPkceServiceProvider extends ServiceProvider
{

	public function boot()
	{
	}
	public function register()
	{
		$this->app->bind('passport-pkce', function () {
			return new HelloWorld;
		}, false);
	}
}