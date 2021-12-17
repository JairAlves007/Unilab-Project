<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WorkPlansController;
use Illuminate\Support\Facades\Route;

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador']], function () {

  Route::get('/work-plans/{id}/create', [WorkPlansController::class, 'create'])
    ->middleware('auth')
    ->name('works_plans.create');

  Route::post('/work-plans/store/{id}', [WorkPlansController::class, 'store'])
    ->middleware('auth')
    ->name('works_plans.store');

  Route::get('/work_plans/createTimeline', [WorkPlansController::class, 'createTimeline'])
    ->middleware('auth')
    ->name('work_plans.createTimeline');

  Route::get('/work_plans/editTimeline', [WorkPlansController::class, 'editTimeline'])
    ->middleware('auth')
    ->name('work_plans.editTimeline');
});

Route::group(['middleware' => ['role:super-admin|bolsista']], function () {

  Route::get('/project/{id}/work-plans', [WorkPlansController::class, 'showWorkPlansThatProject'])
    ->middleware('auth')
    ->name('works_plans.showWorkPlansThatProject');

  Route::get('/work_plans/showAll', [WorkPlansController::class, 'showAll'])
    ->middleware('auth')
    ->name('work_plans.showAll');

  // Route::get('/work_plans/{work_plans_id}/{projects_id}/createBolsistas', [WorkPlansController::class, 'form_bolsistas'])
  //    ->middleware('auth')
  //    ->name('work_plans.insertBolsistas');
});
