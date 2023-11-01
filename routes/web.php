<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductsController;
use App\Admin\Controllers\ProductController;
use App\Admin\Controllers\SubcategoryController;
use App\Admin\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'index']);
Route::post('/contact', [ContactController::class, 'sendEmail']);
Route::get('/about', [AboutUsController::class, 'index']);
Route::get('/subcategory/{id}', [ProductsController::class, 'index']);
Route::get('/subcategories', [ProductsController::class, 'subcategories']);
