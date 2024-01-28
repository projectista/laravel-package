<?php

namespace Projectista\LaravelPackage;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Projectista\LaravelPackage\Commands\HelloWorldCommand;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Bootstrap the package
     */
    public function boot(): void
    {
        $this->mergeConfigurations();
        $this->loadMigrations();
        $this->loadViews();
    }

    private function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                HelloWorldCommand::class,
            ]);
        }
    }

    /**
     * Merge the configuration
     */
    private function mergeConfigurations(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }

    /**
     * Load the migrations
     */
    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom([
            __DIR__.'/../database/migrations/',
        ]);
    }

    /**
     * Load the views
     */
    private function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');
    }
}
