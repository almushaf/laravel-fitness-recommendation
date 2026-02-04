<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\WorkoutLogController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Middleware\AdminMiddleware;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// User
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/recommendation', [RecommendationController::class, 'index'])->name('recommendation');
    Route::get('/latihan/alternatif', [ProgramController::class, 'alternatif'])->name('latihan.alternatif');
    Route::post('/workout-log', [WorkoutLogController::class, 'store'])->name('workout.log');
    Route::get('/workout-log/history', [WorkoutLogController::class, 'history'])->name('workout.history');
    Route::get('/progress/{exercise}', [WorkoutLogController::class, 'progress'])->name('workout.progress');
});

// Admin
Route::middleware(['auth', AdminMiddleware::class])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/users', [AdminController::class, 'users'])->name('users.index');
        Route::get('/users/{user}/logs', [AdminController::class, 'userLogs'])->name('users.logs');

        // CRUD Program Latihan
        Route::resource('programs', AdminProgramController::class)->except(['show']);
        Route::get('/programs/{program}', [AdminProgramController::class, 'show'])->name('programs.show');

        // ✅ Ubah password user (oleh admin)
        Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
        Route::post('/users/{user}/password', [AdminController::class, 'updatePassword'])->name('users.password.update');   
    });