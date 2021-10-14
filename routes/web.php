<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EdictsController;
use App\Http\Controllers\MinTitulationsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EdictsController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])
   ->middleware('auth');

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


// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador']], function () {

   Route::get('/edict/create', [EdictsController::class, 'create'])
      ->middleware('auth');

   Route::get('/edict/show/{id}', [EdictsController::class, 'show'])
      ->middleware('auth');

   Route::post('/edict/store', [EdictsController::class, 'store'])
      ->middleware('auth');

   Route::get('/edict/attachProjects', [EdictsController::class, 'showAttachProject'])
      ->middleware('auth')
      ->name('edicts.projects');

   Route::get('/edict/{id}/attachProjects', [EdictsController::class, 'formAttachProject'])
      ->middleware('auth')
      ->name('edicts.form-attach-project');

   Route::post('/project/{id}/attach', [EdictsController::class, 'attachProject'])
      ->middleware('auth')
      ->name('edicts.attach-project');
});

Route::any('/search', [EdictsController::class, 'search']);
