<?php

use App\Http\Controllers\EdictsController;
use Illuminate\Support\Facades\Route;

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador']], function () {

   Route::get('/edict/create', [EdictsController::class, 'create'])
      ->middleware('auth');

   Route::post('/edict/store', [EdictsController::class, 'store'])
      ->middleware('auth');

   Route::get('/edict/attachProjects', [EdictsController::class, 'showAttachProject'])
      ->middleware('auth')
      ->name('edicts.projects');

});

Route::get('/edict/show/{id}', [EdictsController::class, 'show']);

Route::any('/search', [EdictsController::class, 'search']);
