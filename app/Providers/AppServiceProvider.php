<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('name', 'Siam');
//Static Process
//        View::composer('frontEnd.includes.menu', function($view){
//            $view->with('name', 'Siam');
//        });

        // ('*') for All Page Access
        View::composer('frontEnd.includes.menu', function($view){
            $publicCategories = Category::where('publicStatus', 1)->get();
            $view->with('publicCategories', $publicCategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
