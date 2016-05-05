<?php

namespace ElMatella\SimpleFacebookLaravelSdk;

use Illuminate\Support\ServiceProvider;
use ElMatella\SimpleFacebookLaravelSdk\SimpleFacebookLaravelSdk;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/facebook.php' => config_path('facebook.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SimpleFacebookLaravelSdk::class, function ($app) {
            return new SimpleFacebookLaravelSdk(config('facebook.app_id'),config('facebook.app_secret'),config('facebook.graph_version'));
        });
    }

}