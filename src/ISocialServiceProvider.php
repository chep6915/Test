<?php

namespace Chep6915\ISocial;

use Illuminate\Support\ServiceProvider;

class ISocialServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'i_social');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '../../routes/web.php');

        $this->app->bind('ISocial', function ($app) {
            return new htt;
        });
    }
}
