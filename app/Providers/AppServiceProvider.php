<?php

namespace App\Providers;

use App\Models\MainCategory;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('siteTheme', SiteSetting::current());
        });

        View::composer('layouts.footer', function ($view) {
            $view->with('categories', MainCategory::all());
        });
    }
}
