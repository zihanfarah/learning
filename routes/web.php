<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('page.dashboard', [
        "title" => "Dashboard"
    ]);
})->name('dashboard');

Route::get('/index', [LandingController::class, 'index'])->name('halo');

Route::get('/user', [UserController::class, 'index'])->name('user');
