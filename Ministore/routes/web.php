<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\controllers\categoriescontroller;
use App\controllers\produitscontroller;
use App\controllers\clientscontroller;
use App\controllers\commandescontroller;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardController;



Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::resource('categories', App\Http\Controllers\categoriescontroller::class);
    Route::resource('produits', App\Http\Controllers\produitscontroller::class);
    Route::resource('clients', App\Http\Controllers\clientscontroller::class);
    Route::resource('commandes', App\Http\Controllers\commandescontroller::class);
});

require __DIR__.'/auth.php';

