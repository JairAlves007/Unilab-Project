<?php

use App\Http\Controllers\EdictsController;
use Illuminate\Support\Facades\Route;

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador']], function () {

   Route::get('/edict/create', [EdictsController::class, 'create'])
      ->middleware('auth')
      ->name('edicts.create');

   Route::post('/edict/store', [EdictsController::class, 'store'])
      ->middleware('auth');

   Route::get('/edict/attachProjects', [EdictsController::class, 'showAll'])
      ->middleware('auth')
      ->name('edicts.projects');

   Route::get('/edicts/show', [EdictsController::class, 'showAll'])
      ->middleware('auth')
      ->name('edicts.showAll');

   Route::get('/edicts/edit', [EdictsController::class, 'showAll'])
      ->middleware('auth')
      ->name('edicts.edit');

   Route::get('/edicts/delete', [EdictsController::class, 'showAll'])
      ->middleware('auth')
      ->name('edicts.delete');

   Route::get('/edict/{id}/show/', [EdictsController::class, 'show'])
      ->middleware('auth')
      ->name('edicts.showDashboard');
});

Route::get('/edict/show/{id}', [EdictsController::class, 'show'])
   ->name('edicts.showHome');

Route::any('/search', [EdictsController::class, 'search']);
