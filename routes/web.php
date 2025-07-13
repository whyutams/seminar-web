<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/index', '/');

Route::get('/', [LandingController::class, "index"])->name("index");
Route::get('/beranda', [LandingController::class, "beranda"])->name("beranda");
Route::get('/login', [LoginController::class, "index"])->name("login");
Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard")->middleware("auth");

Route::post('/login', [LoginController::class, "login"]);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');