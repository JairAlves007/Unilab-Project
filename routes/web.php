<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EdictsController;
use App\Http\Controllers\MinTitulationsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EdictsController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])
   ->name('dashboard')
   ->middleware('auth');

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);
