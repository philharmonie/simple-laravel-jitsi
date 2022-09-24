<?php

namespace Harmoniemedia\SimpleLaravelJitsi;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class SimpleLaravelJitsiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/jitsi.php' => config_path('simple-laravel-jitsi.php'),
            ], 'config');
        }

        if (File::exists(__DIR__ . '/../helpers/slug.php')) {
            require __DIR__ . '/../helpers/slug.php';
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/jitsi.php', 'simple-laravel-jitsi');

        $this->app->singleton('simple-laravel-jitsi', function () {
            return new SimpleLaravelJitsi;
        });
    }
}
