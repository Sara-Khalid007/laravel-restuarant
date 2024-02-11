<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Admin Routes
Route::get("/login", [AuthController::class, 'index'])->name('admin.login');
Route::post("/login", [AuthController::class, 'authenticate'])->name('admin.login');
Route::get("/dashboard", [DashboardController::class, 'index'])->name('admin.dashboard');
Route::resource('/settings',SettingsController::class);
Route::resource('menu', MenuController::class);
Route::resource('orders', OrdersController::class);

//Website Routes
Route::post("/", [WebsiteController::class, 'index'])->name('customer.login');
