<?php

use App\Http\Controllers\Admin\JenisPelatihanController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\PesertaController;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('pesertas', PesertaController::class)->except('show');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('pelatihan', PelatihanController::class)->except('show');
    Route::get("pelatihan/update_status/{update_status}", [PelatihanController::class, 'update_status'])->name('pelatihan.update_status');
});
