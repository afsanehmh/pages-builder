<?php

namespace Tarnama\Pages;

use Illuminate\Support\ServiceProvider;

class PagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        require __DIR__.'\Http\routes.php';

        $this->LoadViewsFrom(__DIR__.'/Views','pages');


        $this->publishes([
            __DIR__.'/Views'=> base_path('resources/views/pages'),
            __DIR__.'/Config/main.php' => config_path('page.php'),
            __DIR__.'/../public' => public_path('pages'),
        ]);
        
           $this->publishes([
            __DIR__ . '/Migrations' =>database_path('/migrations')
        ], 
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('pages' ,function (){
            return new Pages;
        });

        $this->mergeConfigFrom(__DIR__.'/Config/main.php','page');
    }
}
