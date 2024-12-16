<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JenisPelatihanController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\PesertaController;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('pesertas', PesertaController::class)->except('show');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('article', ArticleController::class)->except('show');
    Route::put('update/article/status/{article}', [ArticleController::class, 'update_status'])->name('update.article.status');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('pelatihan', PelatihanController::class);
    Route::get("pelatihan/update_status/{update_status}", [PelatihanController::class, 'update_status'])->name('pelatihan.update_status');
    Route::get("pelatihan/delete_status/{delete_status}", [PelatihanController::class, 'delete_status'])->name('pelatihan.delete_status');
    Route::delete("pelatihan/peserta/destroy/{pelatihan}", [PelatihanController::class, 'peserta_destroy'])->name('pelatihan.peserta.destroy');
});
