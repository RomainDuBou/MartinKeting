<?php

use App\Http\Controllers\ProspectController;
use Illuminate\Support\Facades\Route;


Route::get('/prospects/create', [ProspectController::class, 'create'])->name('prospects.create'); 
Route::post('/prospects', [ProspectController::class, 'store'])->name('prospects.store'); 
