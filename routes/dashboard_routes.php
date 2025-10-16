<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminUserController;

/*
|--------------------------------------------------------------------------
| Role dashboards
|--------------------------------------------------------------------------
|
| These routes assume you have registered the 'role' middleware in Kernel.php:
| 'role' => \App\Http\Middleware\RoleMiddleware::class,
|
*/

Route::middleware(['auth','role:super_admin'])
    ->get('/super-admin', [SuperAdminController::class, 'index'])
    ->name('super.dashboard');

Route::middleware(['auth','role:admin'])
    ->get('/admin', [AdminController::class, 'index'])
    ->name('admin.dashboard');

Route::middleware(['auth','role:teacher'])
    ->get('/teacher', [TeacherController::class, 'index'])
    ->name('teacher.dashboard');

Route::middleware(['auth','role:student'])
    ->get('/student', [StudentController::class, 'index'])
    ->name('student.dashboard');

Route::middleware(['auth','role:admin,super_admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('users', [AdminUserController::class, 'index'])->name('users.index');
        Route::get('users/{user}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
        Route::put('users/{user}', [AdminUserController::class, 'update'])->name('users.update');
        Route::delete('users/{user}', [AdminUserController::class, 'destroy'])->name('users.destroy');
    });
