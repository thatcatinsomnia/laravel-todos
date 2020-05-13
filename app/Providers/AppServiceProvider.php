<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // MariaDB newer version need to manually configure the default string length
        // so MySQL can create indexes
        // check the info from https://laravel.com/docs/master/migrations#creating-indexes
        Schema::defaultStringLength(191);
    }
}
