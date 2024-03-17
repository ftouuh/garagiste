<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehiculeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients/store', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/vehicules/create', [VehiculeController::class, 'create'])->name('vehicules.create');
Route::post('/vehicules/store', [VehiculeController::class, 'store'])->name('vehicules.store');
Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules.index');