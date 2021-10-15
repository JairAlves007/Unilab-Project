<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador']], function () {

   Route::get('/project/{id}/attachProjects', [ProjectsController::class, 'create'])
      ->middleware('auth')
      ->name('projects.form-attach-project');

   Route::post('/project/{id}/attach', [ProjectsController::class, 'store'])
      ->middleware('auth')
      ->name('projects.attach-project');

   Route::post('/project/findAreas', [ProjectsController::class, 'findAreas'])
      ->middleware('auth');

   Route::post('/project/findSubAreas', [ProjectsController::class, 'findSubAreas'])
      ->middleware('auth');
});