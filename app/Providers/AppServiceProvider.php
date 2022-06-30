<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

// use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultstringLength(255);
        // Paginator::useBootstrap();
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
