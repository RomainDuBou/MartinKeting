<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Route;

Route::get('/prospects/create', [ProspectController::class, 'create'])->name('prospects.create');
Route::get('/prospects', [ProspectController::class, 'index'])->name('prospects.index');
Route::post('/prospects', [ProspectController::class, 'store'])->name('prospects.store');
Route::get('/prospects/{id}', [ProspectController::class, 'show'])->name('prospects.show');
Route::get('/prospects/{id}/edit', [ProspectController::class, 'edit'])->name('prospects.edit');
Route::put('/prospects/{id}', [ProspectController::class, 'update'])->name('prospects.update');
Route::delete('/prospects/{id}', [ProspectController::class, 'destroy'])->name('prospects.destroy');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/ventes/create', [VenteController::class, 'create'])->name('ventes.create');
Route::get('/ventes', [VenteController::class, 'index'])->name('ventes.index');
Route::post('/ventes', [VenteController::class, 'store'])->name('ventes.store');
Route::get('/ventes/{id}', [VenteController::class, 'show'])->name('ventes.show');
Route::get('/ventes/{id}/edit', [VenteController::class, 'edit'])->name('ventes.edit');
Route::put('/ventes/{id}', [VenteController::class, 'update'])->name('ventes.update');
Route::delete('/ventes/{id}', [VenteController::class, 'destroy'])->name('ventes.destroy');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/clients/{client}/ventes', [VenteController::class, 'ventesByClient'])->name('clients.ventes');
Route::get('/clients/{client}/ventes/{vente}', [VenteController::class, 'showByClient'])->name('clients.ventes.show');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('user.store');

Route::get('/prospects', [ProspectController::class, 'index'])->name('prospects.index');

