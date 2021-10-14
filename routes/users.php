<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:super-admin|gestor']], function () {

   Route::get('/users/view', [DashboardController::class, 'show'])
      ->name('view')
      ->middleware('auth');

   Route::get('/users/edit', [DashboardController::class, 'show'])
      ->name('edit')
      ->middleware('auth');

   Route::get('/users/delete', [DashboardController::class, 'show'])
      ->name('delete')
      ->middleware('auth');

   Route::get('/user/show/{id}', [DashboardController::class, 'showUser'])
      ->middleware('auth');

   Route::get('/user/edit/{id}', [DashboardController::class, 'edit'])
      ->middleware('auth');

   Route::put('/user/update/{id}', [DashboardController::class, 'update'])
      ->middleware('auth');

   Route::delete('/user/delete/{id}', [DashboardController::class, 'destroy'])
      ->middleware('auth');

   Route::get('/user/register', [DashboardController::class, 'create'])
      ->middleware('auth');

   Route::post('/user/create', [DashboardController::class, 'store'])
      ->middleware('auth');
});