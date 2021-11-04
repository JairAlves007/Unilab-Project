<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/show/{id}', [ProfileController::class, 'show'])
   ->name('profile_system.show')
   ->middleware('auth');

Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])
   ->name('profile_system.edit')
   ->middleware('auth');

Route::put('/profile/update/{id}', [ProfileController::class, 'update'])
   ->name('profile_system.update')
   ->middleware('auth');
