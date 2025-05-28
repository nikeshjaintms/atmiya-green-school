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

    Route::prefix('department')->controller(App\Http\Controllers\DepartmentController::class)->group(function () {
        Route::get('/', 'index')->name('admin.department.index');
        Route::get('/create', 'create')->name('admin.department.create');
        Route::post('/store', 'store')->name('admin.department.store');
        Route::get('/edit/{id}', 'edit')->name('admin.department.edit');
        Route::put('/update/{id}', 'update')->name('admin.department.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.department.delete');
    });

    Route::prefix('faculty')->controller(App\Http\Controllers\FacultyController::class)->group(function () {
        Route::get('/', 'index')->name('admin.faculty.index');
        Route::get('/create', 'create')->name('admin.faculty.create');
        Route::post('/store', 'store')->name('admin.faculty.store');
        Route::get('/show/{id}', 'show')->name('admin.faculty.show');
        Route::get('/edit/{id}', 'edit')->name('admin.faculty.edit');
        Route::put('/update/{id}', 'update')->name('admin.faculty.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.faculty.delete');
    });

    Route::prefix('testimonial')->controller(App\Http\Controllers\TestimonialsController::class)->group(function () {
        Route::get('/', 'index')->name('admin.testimonial.index');
        Route::get('/create', 'create')->name('admin.testimonial.create');
        Route::post('/store', 'store')->name('admin.testimonial.store');
        Route::get('/show/{id}', 'show')->name('admin.testimonial.show');
        Route::get('/edit/{id}', 'edit')->name('admin.testimonial.edit');
        Route::put('/update/{id}', 'update')->name('admin.testimonial.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.testimonial.delete');
    });

    Route::prefix('event')->controller(App\Http\Controllers\EventController::class)->group(function () {
        Route::get('/', 'index')->name('admin.event.index');
        Route::get('/create', 'create')->name('admin.event.create');
        Route::post('/store', 'store')->name('admin.event.store');
        Route::get('/show/{id}', 'show')->name('admin.event.show');
        Route::get('/edit/{id}', 'edit')->name('admin.event.edit');
        Route::put('/update/{id}', 'update')->name('admin.event.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.event.delete');
    });

});

