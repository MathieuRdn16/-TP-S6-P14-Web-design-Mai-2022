<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     */
    public function boot(): void
    {
        //
        if($this->app->environment('production')){
            \URL::forceScheme('https');
        }
    }
}