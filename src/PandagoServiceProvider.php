<?php

namespace Shihab\Pandago;

use Illuminate\Support\ServiceProvider;

class PandagoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
    */
    public function register()
    {
        $this->app->make('Shihab\Pandago\Pandago');
    }
}
