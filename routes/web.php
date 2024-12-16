<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::prefix('landing')->name('admin.')->group(function () {
    Route::get('detail/article/{uuid}', [LandingController::class, 'detail_article'])->name('detail.article');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/pimpinan.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
