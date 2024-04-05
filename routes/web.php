<?php

use App\Http\Controllers\ProspectController;
use App\Models\Prospect;
use Illuminate\Support\Facades\Route;


Route::get('/prospects', [ProspectController::class, 'index'])->name('prospects.index');

Route::get('/prospects/create', [ProspectController::class, 'create'])->name('prospects.create'); 
Route::post('/prospects', [ProspectController::class, 'store'])->name('prospects.store'); 
Route::get('/prospects/{id}', [ProspectController::class, 'show'])->name('prospects.show');
Route::get('/prospects/{id}/edit', [ProspectController::class, 'edit'])->name('prospects.edit');
Route::put('/prospects/{id}', [ProspectController::class, 'update'])->name('prospects.update');
Route::delete('/prospects/{id}', [ProspectController::class, 'delete'])->name('prospects.delete');




