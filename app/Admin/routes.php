<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('category', CategoryController::class);
    $router->resource('subcategory', SubcategoryController::class);
    $router->resource('products', ProductController::class);
    $router->resource('about_us', AboutUsController::class);
    $router->resource('news', NewsController::class);
});
