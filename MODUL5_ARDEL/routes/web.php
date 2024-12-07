<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('dosens')->group(function () {
    Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
    Route::get('/create', [DosenController::class, 'getCreateForm'])->name('dosens.create');
    Route::post('/', [DosenController::class, 'store'])->name('dosens.store');
    Route::get('/{id}', [DosenController::class, 'show'])->name('dosens.show');
    Route::get('/dosen/{id}/edit', [DosenController::class, 'getEditForm'])->name('dosens.edit');
    Route::put('/dosens/{id}', [DosenController::class, 'update'])->name('dosens.update');
    Route::delete('/dosens/{id}', [DosenController::class, 'destroy'])->name('dosens.destroy');
});

Route::prefix('mahasiswas')->group(function () {
    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
    Route::get('/create', [MahasiswaController::class, 'getCreateForm'])->name('mahasiswas.create');
    Route::post('/', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
    Route::get('/{id}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
    Route::get('/{id}/edit', [MahasiswaController::class, 'getEditForm'])->name('mahasiswas.edit');
    Route::put('/{id}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
    Route::delete('/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
});
