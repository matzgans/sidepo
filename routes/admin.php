<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\Admin\JenisPelatihanController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\PesertaController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('pesertas', PesertaController::class)->except('show');
    Route::resource('employee', EmployeeController::class)->except('show');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('article', ArticleController::class)->except('show');
    Route::put('update/article/status/{article}', [ArticleController::class, 'update_status'])->name('update.article.status');
    Route::resource('jenis_pelatihan', JenisPelatihanController::class)->except('show');
    Route::resource('pelatihan', PelatihanController::class);
    Route::post("pelatihan/update_status/{pelatihan}", [PelatihanController::class, 'update_status'])->name('pelatihan.update_status');
    Route::get("pelatihan/update_status/all/{jenis_pelatihan_id}", [PelatihanController::class, 'update_status_all'])->name('pelatihan.update_status.all');
    Route::get("pelatihan/edit_score/{pelatihan}", [PelatihanController::class, 'edit_score'])->name('pelatihan.edit_score');
    Route::put("pelatihan/update_score/{pelatihan}", [PelatihanController::class, 'update_score'])->name('pelatihan.update_score');
    Route::delete("pelatihan/peserta/destroy/{pelatihan}", [PelatihanController::class, 'peserta_destroy'])->name('pelatihan.peserta.destroy');
});
