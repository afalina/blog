<?php namespace App\Providers;

use App\Debug\Debugger;
use Illuminate\Support\ServiceProvider;

class DebuggerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap application service.
     */
    public function boot()
    {
        // Enable debugger when debug = true
        $this->app->make(Debugger::class)->collectDatabaseQueries();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Debugger::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            Debugger::class
        ];
    }
}