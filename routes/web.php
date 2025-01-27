<?php

use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAchievementController;
use App\Http\Controllers\UserProgressController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/digibook', function () {return view('dashboard');});
    Route::get('/about', function () {return view('about');});

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dictionary', [DictionaryController::class, 'index'])->name('dictionary.index');

    Route::get('/achievements', [UserAchievementController::class, 'index'])->name('achievement.index');
    Route::put('/achievements/dictionary', [UserAchievementController::class, 'visitDictionary'])->name('achievement.dictionary');
    Route::put('/achievements/about', [UserAchievementController::class, 'visitAbout'])->name('achievement.about');

    Route::get('/chapters', [UserProgressController::class, 'index'])->name('chapters.index');
    Route::get('/chapter/{chapter}', [UserProgressController::class, 'show'])->name('chapters.show');
    Route::post('/chapter/save/{chapter}', [UserProgressController::class, 'create'])->name('chapters.create');

});

require __DIR__.'/auth.php';
