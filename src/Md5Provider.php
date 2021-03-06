<?php

namespace Hyf\Md5;
use Hyf\Md5\Md5;

use Illuminate\Support\ServiceProvider;

class Md5Provider extends ServiceProvider
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
        $this->app->bind('md5',function(){
            return new Md5();
        });
    }
}
