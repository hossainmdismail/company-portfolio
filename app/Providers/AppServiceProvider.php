<?php

namespace App\Providers;

use App\Models\Social_links;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('frontend.layouts.footer', function ($view){
            $view->with('soicals', Social_links::where('status', 1)->get());
        });
    }
}
