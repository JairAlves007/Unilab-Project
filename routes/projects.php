<?php

use App\Http\Controllers\ProjectsController;
use App\Models\Projects;
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

   Route::get('/projects/showAll', [ProjectsController::class, 'showAll'])
      ->middleware('auth')
      ->name('projects.showAll');

   // Route::post('/project/create', [ProjectsController::class, 'findSubAreas'])
   //    ->middleware('auth');

   Route::post('/project/findAreas', [ProjectsController::class, 'findAreas'])
      ->middleware('auth');

   Route::post('/project/findSubAreas', [ProjectsController::class, 'findSubAreas'])
      ->middleware('auth');

   Route::get('/projects/showCandidates', [ProjectsController::class, 'showCandidates'])
      ->name('projects.showCandidates')
      ->middleware('auth');

   Route::get('/project/{id}/candidates', [ProjectsController::class, 'candidates'])
      ->name('projects.candidates')
      ->middleware('auth');

   Route::get('/project/{project_id}/approved', [ProjectsController::class, 'approve'])
      ->middleware('auth')
      ->name('projects.approved');
});

Route::group(['middleware' => ['role:super-admin|bolsista']], function () {
   Route::post('/project/{edict_id}/join/{project_id}', [ProjectsController::class, 'join'])
      ->name('projects.join')
      ->middleware('auth');

   Route::get('/projects/participating', [ProjectsController::class, 'showAll'])
      ->name('projects.participating')
      ->middleware('auth');

});

Route::group(['middleware' => ['role:bolsista']], function () {
   Route::get('/projects/frequency', [ProjectsController::class, 'frequency'])
      ->middleware('auth')
      ->name('projects.frequency');
});
   Route::get('/projects/sobre', [ProjectsController::class, 'sobre'])
    ->middleware('auth')
    ->name('projects.sobre');