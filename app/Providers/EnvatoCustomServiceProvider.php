<?php

namespace App\Providers;

use App\Http\Service\DemoOne;
use Illuminate\Support\ServiceProvider;

class EnvatoCustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Services\DemoOne', function ($app) {
            return new DemoOne();
        });
    }
}
