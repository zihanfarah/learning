<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('page.dashboard', [
//         "title" => "Dashboard"
//     ]);
// })->name('dashboard');
Route::get('/dashboard', function () {
    return view('page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/slicing', function () {
    return view('page.login');
})->middleware(['auth', 'verified'])->name('slicing');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
});

require __DIR__.'/auth.php';

