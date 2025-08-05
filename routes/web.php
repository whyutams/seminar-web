<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardHeroController;
use App\Http\Controllers\DashboardLandingController;
use App\Http\Controllers\DashboardRegistrationController;
use App\Http\Controllers\DashboardSpeakerController;
use App\Http\Controllers\DashboardUserController;
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
Route::get('/register', [RegisterController::class, "index"])->name("register");
Route::get('/login', [LoginController::class, "index"])->name("login");
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/login', [LoginController::class, "login"]);
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('dashboard')
        ->name('dashboard.')
        ->group(function () {
            Route::get('', [DashboardController::class, "redirect"])->name("dashboard");

            Route::resource('users', DashboardUserController::class)->names('users');
            Route::resource('speakers', DashboardSpeakerController::class)->names('speakers');
            Route::resource('landing', DashboardLandingController::class)->only(['update', 'index'])->names('landing');
            Route::resource('hero', DashboardHeroController::class)->only(['store', 'destroy'])->names('hero');

        });
});