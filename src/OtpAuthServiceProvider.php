<?php

namespace Harirsoft\OtpAuth;

use Illuminate\Support\ServiceProvider;

/**
 * Laravel Likeable Package by Ali Bayat.
 */
class OtpAuthServiceProvider extends ServiceProvider
{
	public function boot()
	{
        // $this->loadRoutesFrom(__DIR__.'/../web.php');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../migrations/' => database_path('migrations')
        ], 'migrations');
	}

	public function register() {}
}
