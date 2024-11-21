<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', [FileController::class, 'index'])->name('files.index');
Route::get('/create', [FileController::class, 'create'])->name('files.create');
Route::post('/files', [FileController::class, 'store'])->name('files.store');
Route::get('name/{file}', [FileController::class, 'show'])->name('files.show');
Route::get('img/{id}', [FileController::class, 'img'])->name('files.img');;

// Route::resource('files', FileController::class);