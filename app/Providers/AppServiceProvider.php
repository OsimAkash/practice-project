<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // service provaider
        







        // //bind working first options for service_container
        // app()->bind('first_service_helper', function($app){
        //     dd("this is my first service container");
        // });

        
        // app()->bind('second_service_helper', function($app){
        //     dd("this is my second service container");
        // });
        
        // app()->bind('third_service_helper', function($app){
        //     dd("this is my third service container");
        // });
        // app()->bind('fourth_service_helper', function($app){
        //     dd("this is my fourth service container");
        // });
        
        

        // bind working second options better than $this keyword
        // App::getFacadeApplication()->bind('this is my secound service provider', function ($app)  {
            
        // }); 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
