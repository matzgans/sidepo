<?php

use App\Http\Controllers\Pimpinan\DashboardPimpinanController;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:pimpinan'])->prefix('pimpinan')->name('pimpinan.')->group(function () {
    Route::get('dashboard', [DashboardPimpinanController::class, 'dashboard'])->name('dashboard');
});
