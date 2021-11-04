<?php

use App\Http\Controllers\EdictsController;
use Illuminate\Support\Facades\Route;

// Route::get('/edict/{id}', [EdictsController::class, 'show']);
// Route::get('/titulation/{id}', [MinTitulationsController::class, 'show']);
// Route::get('/category/{id}', [CategoriesController::class, 'show']);


Route::group(['middleware' => ['role:super-admin|orientador|membro']], function () {

    Route::get('/edict/create', [EdictsController::class, 'create'])
        ->middleware('auth')
        ->name('edicts.create');

    Route::post('/edict/store', [EdictsController::class, 'store'])
        ->name('edicts.store')
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

    Route::get('/edicts/edit/{id}', [EdictsController::class, 'edit'])
        ->middleware('auth')
        ->name('edicts.formUpdate');

    Route::put('/edicts/update/{id}', [EdictsController::class, 'update'])
        ->middleware('auth')
        ->name('edicts.update');

    Route::get('/edicts/delete', [EdictsController::class, 'showAll'])
        ->middleware('auth')
        ->name('edicts.delete');

    Route::get("/edicts/destroy/{id}", [EdictsController::class, 'destroy'])
        ->middleware('auth')
        ->name('edicts.destroy');

    Route::get('/edict/{id}/show/', [EdictsController::class, 'show'])
        ->middleware('auth')
        ->name('edicts.showDashboard');

    Route::post('/edict/rate/', [EdictsController::class, 'rate'])
        ->name('edicts.rate')
        ->middleware('auth');
});

Route::get('/edict/show/{id}', [EdictsController::class, 'show'])
    ->name('edicts.showHome');

Route::any('/search', [EdictsController::class, 'search']);
