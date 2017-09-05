<?php




namespace Supports\Providers;

use Illuminate\Support\ServiceProvider;

class SupportProvider extends ServiceProvider
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
        $this->app->bind('bundle','Supports\Bundle');
        $this->app->bind('result','Supports\Result');
        $this->app->bind('filemanager','Supports\FileManager');
        $this->app->bind('eventListenerRegister','Supports\EventListenerRegister');
    }
}