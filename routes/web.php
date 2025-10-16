<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Dashboard Route — Redirect based on user role
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    switch ($user->role) {
        case 'super_admin':
            return redirect()->route('superadmin.dashboard');
        case 'admin':
            return redirect()->route('admin.dashboard');
        case 'teacher':
            return redirect()->route('teacher.dashboard');
        case 'student':
            return redirect()->route('student.dashboard');
        default:
            abort(403, 'Unauthorized');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Role-Based Dashboards
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/super-admin', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.dashboard');
});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
});

use App\Http\Controllers\AdminUserController;

Route::middleware(['auth', 'role:admin,super_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [AdminUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('users.destroy');
});

/*
|--------------------------------------------------------------------------
| Courses (Example)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
});

/*
|--------------------------------------------------------------------------
| Auth Routes (from Breeze/Fortify)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
