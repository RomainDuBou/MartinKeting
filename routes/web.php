<?php

use App\Http\Controllers\EchangeController;
use App\Http\Controllers\ProspectController;
use Illuminate\Support\Facades\Route;

// PROSPECTS

Route::get('/prospects', [ProspectController::class, 'index'])->name('prospects.index');

Route::get('/prospects/create', [ProspectController::class, 'create'])->name('prospects.create'); 
Route::post('/prospects', [ProspectController::class, 'store'])->name('prospects.store'); 
Route::get('/prospects/{id}', [ProspectController::class, 'show'])->name('prospects.show');
Route::get('/prospects/{id}/edit', [ProspectController::class, 'edit'])->name('prospects.edit');
Route::put('/prospects/{id}', [ProspectController::class, 'update'])->name('prospects.update');
Route::delete('/prospects/{id}', [ProspectController::class, 'delete'])->name('prospects.delete');

// ECHANGES

Route::get('/echanges', [EchangeController::class, 'index'])->name('echanges.index'); 

Route::get('/echanges/create', [EchangeController::class, 'create'])->name('echanges.create'); 
Route::post('/echanges', [EchangeController::class, 'store'])->name('echanges.store'); 
Route::get('/echanges/{id}', [EchangeController::class, 'show'])->name('echanges.show'); 
Route::get('/echanges/{id}/edit', [EchangeController::class, 'edit'])->name('echanges.edit');
Route::put('/echanges/{id}', [EchangeController::class, 'update'])->name('echanges.update');
Route::delete('/echanges/{id}', [EchangeController::class, 'delete'])->name('echanges.delete');







