<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //database to showing data 
        $data=array();
        $data['a']=10; 
        $data['b']=20; 
        $data['c']=30; 

        view()->share('number', $data);
    }
}
