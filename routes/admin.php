<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JenisPelatihanController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\PesertaController;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('pesertas', PesertaController::class)->except('show');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('pelatihan', PelatihanController::class)->except('show');
    Route::get("pelatihan/update_status/{update_status}", [PelatihanController::class, 'update_status'])->name('pelatihan.update_status');
    Route::get("pelatihan/delete_status/{delete_status}", [PelatihanController::class, 'delete_status'])->name('pelatihan.delete_status');
});
