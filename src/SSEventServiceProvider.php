<?php

namespace Noisim\SSEvent;

use Illuminate\Support\ServiceProvider;

class SSEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/ss-event.php' => config_path('ss-event.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("ss-event", \Noisim\SSEvent\SSEvent::class);
    }
}