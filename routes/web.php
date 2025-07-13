<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;
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
Route::get('/form', [RegistrationController::class, 'index'])->name("form");
Route::get('/dashboard', [DashboardController::class, "redirect"])->name("dashboard")->middleware("auth");
Route::get('/register', [RegisterController::class, "index"])->name("register");
Route::get('/login', [LoginController::class, "index"])->name("login");
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); 

Route::post('/login', [LoginController::class, "login"]);
Route::post('/register', [RegisterController::class, 'store']);