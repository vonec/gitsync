<?php

namespace Vonec\Gitsync;

use Illuminate\Support\ServiceProvider;

class GitsyncServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->publishes([
            __DIR__.'/../config/gitsync.php' => config_path('gitsync.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {        
        $this->app->make('Vonec\Gitsync\Http\Controllers\GitsyncController');
    }
}

