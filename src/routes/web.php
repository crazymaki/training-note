<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
    Route::get('/training/create', [TrainingController::class, 'create'])->name('training.create');
    Route::get('/progress', [ProgressController::class, 'index'])->name('progress.index');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/api/training/menus', [ApiController::class, 'getTrainingMenu']);
    Route::get('/training/add-exercise-modal', [TrainingController::class, 'getAddExerciseModal']);
    Route::post('/training/add', [TrainingController::class, 'add']);
});

require __DIR__.'/auth.php';
