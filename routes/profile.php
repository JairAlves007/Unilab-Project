<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/show/{id}', [ProfileController::class, 'show'])
->middleware('auth');

Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])
->middleware('auth');

Route::put('/profile/update/{id}', [ProfileController::class, 'update'])
->middleware('auth');