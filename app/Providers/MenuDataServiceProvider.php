<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class MenuDataServiceProvider extends ServiceProvider
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
        view()->composer('layouts.menu', function ($view) {
            $categories = Category::orderBy('id', 'asc')->with('subcategories')->get();

            $view->with('categories', $categories);
        });
    }
}
