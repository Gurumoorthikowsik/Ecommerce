<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\HomeController;

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

// USER LARAVEL ROUTES

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [HomeController::class, 'login']);


// ADMIN LARAVEL ROUTES

Route::get('admin-login', [AdminController::class, 'adminlogin']);

