<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WorkPlansController;
use Illuminate\Support\Facades\Route;

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador']], function () {

   Route::get('/work-plans/create', [WorkPlansController::class, 'create'])
      ->middleware('auth')
      ->name('works_plans.create');

   Route::post('/work-plans/store', [WorkPlansController::class, 'store'])
      ->middleware('auth')
      ->name('works_plans.store');

      Route::get('/work-plans/approved', [WorkPlansController::class, 'show'])
      ->middleware('auth')
      ->name('works_plans.approved');
});
