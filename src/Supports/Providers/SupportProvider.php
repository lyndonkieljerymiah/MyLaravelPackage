<?php




namespace MyPackage\Supports\Providers;

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
        $this->app->bind('bundle','MyPackage\Supports\Bundle');
        $this->app->bind('result','MyPackage\Supports\Result');
        $this->app->bind('filemanager','MyPackage\Supports\FileManager');
        $this->app->bind('eventListenerRegister','MyPackage\Supports\EventListenerRegister');
    }
}