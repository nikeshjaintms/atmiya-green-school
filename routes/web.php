<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::controller(App\Http\Controllers\AuthController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('/logout', 'logout')->name('admin.logout');
    });

    Route::prefix('department')->group(function () {
        Route::get('/', [App\Http\Controllers\DepartmentController::class, 'index'])->name('admin.department.index');
        Route::get('/create', [App\Http\Controllers\DepartmentController::class, 'create'])->name('admin.department.create');
        Route::post('/store', [App\Http\Controllers\DepartmentController::class, 'store'])->name('admin.department.store');
        Route::get('/edit/{id}', [App\Http\Controllers\DepartmentController::class, 'edit'])->name('admin.department.edit');
        Route::put('/update/{id}', [App\Http\Controllers\DepartmentController::class, 'update'])->name('admin.department.update');
        Route::delete('/delete/{id}', [App\Http\Controllers\DepartmentController::class, 'destroy'])->name('admin.department.delete');
    });

    Route::prefix('faculty')->group(function () {
        Route::get('/', [App\Http\Controllers\FacultyController::class, 'index'])->name('admin.faculty.index');
        Route::get('/create', [App\Http\Controllers\FacultyController::class, 'create'])->name('admin.faculty.create');
        Route::post('/store', [App\Http\Controllers\FacultyController::class, 'store'])->name('admin.faculty.store');
        Route::get('/edit/{id}', [App\Http\Controllers\FacultyController::class, 'edit'])->name('admin.faculty.edit');
        Route::put('/update/{id}', [App\Http\Controllers\FacultyController::class, 'update'])->name('admin.faculty.update');
        Route::delete('/delete/{id}', [App\Http\Controllers\FacultyController::class, 'destroy'])->name('admin.faculty.delete');
    });
    
});

