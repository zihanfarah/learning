<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store']);

Route::get('/showing/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('/showing/{user}/edit', [UserController::class, 'edit'])->name('edit');
Route::put('/showing/{user}/update', [UserController::class, 'update'])->name('update');

Route::delete('/showing/user/{user}/destroy', [UserController::class, 'destroy'])->name('delete');

// Route::get('/user/create', function () {
//     return view('page.create', [
//         "title" => "Create User"
//     ]);
// })->name('create');

// Route::post();
