<?php

namespace SAW\AdminPanel;

use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('SAW\AdminPanel\AdminPanelController');
        $this->loadViewsFrom(__DIR__.'/views', 'AdminPanel');
        
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/AdminPanel'),
        ]);
        
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/AdminPanel'),
        ], 'public');
    }
}
