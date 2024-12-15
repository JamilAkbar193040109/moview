<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontMoviesController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/movies', [FrontMoviesController::class, 'index'])->name('movies');

Route::get('/about', fn() => view('about'))->name('about');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::resource('movies', MovieController::class)->middleware('can:admin');
    Route::resource('genres', GenreController::class)->middleware('can:admin');
    Route::resource('reviews', ReviewController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
