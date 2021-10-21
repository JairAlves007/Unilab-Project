<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/show/{id}', [ProfileController::class, 'show'])
   ->name('profile.show')
   ->middleware('auth');

Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])
   ->name('profile.edit')
   ->middleware('auth');

Route::put('/profile/update/{id}', [ProfileController::class, 'update'])
   ->name('profile.update')
   ->middleware('auth');
