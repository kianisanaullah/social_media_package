<?php

namespace Kianisanaullah\SocialMedia\SocialMediaService;

use Illuminate\Support\ServiceProvider;

class SocialMediaServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register any bindings or services here
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap code here, such as registering routes, views, etc.

        $this->registerRoutes();
        $this->registerViews();
        $this->registerConfig();
    }

    /**
     * Register package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        // Example: Load routes from the "routes" directory
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Register package views.
     *
     * @return void
     */
    protected function registerViews()
    {
        // Example: Load views from the "Views" directory
        $this->loadViewsFrom(__DIR__.'/Views', 'src/resources/views');
    }

    /**
     * Register package configuration.
     *
     * @return void
     */
    protected function registerConfig()
    {
        // Example: Publish the configuration file to the application config directory
        $this->publishes([
            __DIR__.'/Config/your-config.php' => config_path('your-config.php'),
        ], 'config');
    }
}
