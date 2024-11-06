<?php

use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('pesertas', PesertaController::class)->except('show');
});
