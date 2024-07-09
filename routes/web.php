<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LoginController;

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

Route::get('/', HomeController::class . '@home')->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('home');
    })->name('home');
});


Route::get('/logout', LoginController::class. '@logout')->name('logout');