<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SemesterController;
use App\Http\Controllers\Backend\WeekController;
use App\Http\Controllers\Backend\FacultyController;
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
    'prefix' => 'program',
    'as' => 'program.',
    'middleware' => 'role:'.config('boilerplate.access.role.admin'),
], function(){
    Route::group([
        'prefix' => 'semester',
        'as' => 'semester.',
        'middleware' => 'role:'.config('boilerplate.access.role.admin'),
    ], function () {
        Route::get('/', [SemesterController::class, 'index'])
            ->name('index');
        Route::get('create', [SemesterController::class, 'create'])
            ->name('create');
        Route::post('/', [SemesterController::class, 'store'])->name('store');
    
        Route::group(['prefix' => '{semester}'], function () {
            Route::get('edit', [SemesterController::class, 'edit'])
                ->name('edit');
            Route::patch('/', [SemesterController::class, 'update'])->name('update');
            Route::delete('/', [SemesterController::class, 'destroy'])->name('destroy');
        });
        Route::get('export/', [SemesterController::class, 'export'])->name('download');
        Route::get('export-pdf/', [SemesterController::class, 'exportPDF'])->name('download-pdf');
    });
    
    Route::group([
        'prefix' => 'week',
        'as' => 'week.',
        'middleware' => 'role:'.config('boilerplate.access.role.admin'),
    ], function () {
        Route::get('/', [WeekController::class, 'index'])
            ->name('index');
        Route::get('create', [WeekController::class, 'create'])
            ->name('create');
        Route::post('/', [WeekController::class, 'store'])->name('store');
    
        Route::group(['prefix' => '{week}'], function () {
            Route::get('edit', [WeekController::class, 'edit'])
                ->name('edit');
            Route::patch('/', [WeekController::class, 'update'])->name('update');
            Route::delete('/', [WeekController::class, 'destroy'])->name('destroy');
        });
        Route::get('export/', [WeekController::class, 'export'])->name('download');
        Route::get('export-pdf/', [WeekController::class, 'exportPDF'])->name('download-pdf');
    });
    Route::group([
        'prefix' => 'faculty',
        'as' => 'faculty.',
        'middleware' => 'role:'.config('boilerplate.access.role.admin'),
    ], function () {
        Route::get('/', [FacultyController::class, 'index'])
            ->name('index');
        Route::get('create', [FacultyController::class, 'create'])
            ->name('create');
        Route::post('/', [FacultyController::class, 'store'])->name('store');
    
        Route::group(['prefix' => '{faculty}'], function () {
            Route::get('edit', [FacultyController::class, 'edit'])
                ->name('edit');
            Route::patch('/', [FacultyController::class, 'update'])->name('update');
            Route::delete('/', [FacultyController::class, 'destroy'])->name('destroy');
        });
        Route::get('export/', [FacultyController::class, 'export'])->name('download');
        Route::get('export-pdf/', [FacultyController::class, 'exportPDF'])->name('download-pdf');
    });
});
