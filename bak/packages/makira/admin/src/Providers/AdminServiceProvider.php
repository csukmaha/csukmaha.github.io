<?php

namespace MAkira\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes/routes.php';
        }

        // include  __DIR__. '/../helpers/macros.php';
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublisher();
    }

    protected function registerPublisher()
    {
        // $this->publishes([
        //     __DIR__ . '/../resources/config/flx.fatman.php' => config_path('flx.fatman.php')
        // ], 'config');

        // $this->publishes([
        //     __DIR__ . '/../resources/migrations' => database_path('/migrations')
        // ], 'migrations');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/admin')
        ], 'views');

        // $this->publishes([
        //     __DIR__ . '/../resources/assets' => public_path('package/flx/fatman')
        // ], 'public');
    }
}
