<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SemesterController;
use Tabuna\Breadcrumbs\Trail;
use App\Models\Semester;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });
Route::group([
    'prefix' => 'semester',
    'as' => 'semester.',
    'middleware' => 'role:'.config('boilerplate.access.role.admin'),
], function () {
    Route::get('/', [SemesterController::class, 'index'])
        ->name('index');
        // ->breadcrumbs(function (Trail $trail) {
        //     // $trail->parent('admin.dashboard')
        //     //     ->push(__('Role Management'), route('admin.semester.index'));
        // });

    Route::get('create', [SemesterController::class, 'create'])
        ->name('create');
        // ->breadcrumbs(function (Trail $trail) {
        //     // $trail->parent('admin.semester.index')
        //     //     ->push(__('Create Role'), route('admin.semester.create'));
        // });

    Route::post('/', [SemesterController::class, 'store'])->name('store');

    Route::group(['prefix' => '{role}'], function () {
        Route::get('edit', [SemesterController::class, 'edit'])
            ->name('edit');
            // ->breadcrumbs(function (Trail $trail, Semester $semester) {
            //     // $trail->parent('admin.semester.index')
            //     //     ->push(__('Editing :role', ['role' => $semester->name]), route('adminsemester.edit', $semester));
            // });

        Route::patch('/', [SemesterController::class, 'update'])->name('update');
        Route::delete('/', [SemesterController::class, 'destroy'])->name('destroy');
    });
    Route::get('export/', [SemesterController::class, 'export'])->name('download');
    Route::get('export-pdf/', [SemesterController::class, 'exportPDF'])->name('download-pdf');
});