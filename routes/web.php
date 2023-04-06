<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'welcome']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/services', [SiteController::class, 'services']);
Route::get('/testimonial', [SiteController::class, 'testimonial']);
Route::get('/works', [SiteController::class, 'works']);
Route::get('/contact', [SiteController::class, 'contact']);
