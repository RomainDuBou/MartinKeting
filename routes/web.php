<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EchangeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('user.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::middleware('auth')->group(function () {

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

// CLIENTS

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index'); 

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store'); 
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'delete'])->name('clients.delete');

// VENTES 

Route::get('/ventes/create', [VenteController::class, 'create'])->name('ventes.create');
Route::get('/ventes', [VenteController::class, 'index'])->name('ventes.index');
Route::post('/ventes', [VenteController::class, 'store'])->name('ventes.store');
Route::get('/ventes/{id}', [VenteController::class, 'show'])->name('ventes.show');
Route::get('/ventes/{id}/edit', [VenteController::class, 'edit'])->name('ventes.edit');
Route::put('/ventes/{id}', [VenteController::class, 'update'])->name('ventes.update');
Route::delete('/ventes/{id}', [VenteController::class, 'delete'])->name('ventes.delete');

});


// Route de middleware pour rediriger vers la page de connexion si non authentifié
Route::middleware('guest')->group(function () {
    Route::get('/{any}', function () {
        return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à l\'interface.');
    })->where('any', '.*');
});




