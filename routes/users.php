<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:super-admin|gestor']], function () {

   Route::get('/users/view', [UserController::class, 'showUsers'])
      ->name('users.view')
      ->middleware('auth');

   Route::get('/users/edit', [UserController::class, 'showUsers'])
      ->name('users.edit')
      ->middleware('auth');

   Route::get('/users/delete', [UserController::class, 'showUsers'])
      ->name('users.delete')
      ->middleware('auth');

   Route::get('/user/show/{id}', [UserController::class, 'show'])
      ->name('users.showUser')
      ->middleware('auth');

   Route::get('/user/edit/{id}', [UserController::class, 'edit'])
      ->name('users.editAnUser')
      ->middleware('auth');

   Route::put('/user/update/{id}', [UserController::class, 'update'])
      ->name('users.update')
      ->middleware('auth');

   Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])
      ->name('users.destroy')
      ->middleware('auth');

   Route::get('/user/register', [UserController::class, 'create'])
      ->name('users.create')
      ->middleware('auth');

   Route::post('/user/create', [UserController::class, 'store'])
      ->name('users.store')
      ->middleware('auth');
});