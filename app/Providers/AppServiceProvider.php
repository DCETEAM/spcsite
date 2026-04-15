<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MainCategory;

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
  public function boot()
{
    view()->composer('layouts.footer', function ($view) {
        $view->with('categories', MainCategory::all());
    });
}}
