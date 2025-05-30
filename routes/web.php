<?php

use App\Http\Controllers\ActivityCategoryController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CircularController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MagazineController;
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


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('admission', 'admin')->name('frontend.admin');
    Route::get('about', 'about')->name('frontend.about');
    Route::get('contact', 'contact')->name('frontend.contact');
    Route::get('academic', 'academic')->name('frontend.academic');
    Route::get('gallery', 'gallery')->name('frontend.gallery');
    Route::get('documentsInformation', 'documentsInformation')->name('frontend.documents-information');
    Route::get('event', 'event')->name('frontend.event');
    Route::get('magazine', 'magazine')->name('frontend.magazine');
    Route::get('download/{id}/{fileIndex}', 'download')->name('magazine.download');
    Route::get('staff', 'staff')->name('frontend.staff');
    Route::get('staff_backup', 'staff_backup')->name('frontend.staff_backup');
    Route::get('teachingStaff', 'teachingStaff')->name('frontend.teaching_staff');
    Route::get('generalInformation', 'generalInformation')->name('frontend.generalInformation');
    Route::get('schoolInfrastructure', 'schoolInfrastructure')->name('frontend.schoolInfrastructure');

});


//Route::get('/', function () {
//    return view('index');
//});

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

    Route::prefix('event')->controller(EventController::class)->group(function () {
        Route::get('/', 'index')->name('admin.event.index');
        Route::get('/create', 'create')->name('admin.event.create');
        Route::post('/store', 'store')->name('admin.event.store');
        Route::get('/edit/{id}', 'edit')->name('admin.event.edit');
        Route::put('/update/{id}', 'update')->name('admin.event.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.event.delete');
    });

    Route::prefix('circular')->controller(CircularController::class)->group(function () {
        Route::get('/', 'index')->name('admin.circular.index');
        Route::get('/create', 'create')->name('admin.circular.create');
        Route::post('/store', 'store')->name('admin.circular.store');
        Route::get('/edit/{id}', 'edit')->name('admin.circular.edit');
        Route::put('/update/{id}', 'update')->name('admin.circular.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.circular.delete');
    });

    Route::prefix('magazine')->controller(MagazineController::class)->group(function () {
        Route::get('/', 'index')->name('admin.magazine.index');
        Route::get('/create', 'create')->name('admin.magazine.create');
        Route::post('/store', 'store')->name('admin.magazine.store');
        Route::get('/edit/{id}', 'edit')->name('admin.magazine.edit');
        Route::put('/update/{id}', 'update')->name('admin.magazine.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.magazine.delete');



    });

    Route::prefix('contact')->controller(ContactController::class)->group(function () {
        Route::get('/', 'index')->name('admin.contact.index');
        Route::post('/store', 'store')->name('admin.contact.store');
        Route::delete('/delete/{id}', 'destroy')->name('admin.contact.delete');
    });

    Route::prefix('enquiry')->controller(EnquiryController::class)->group(function () {
        Route::get('/', 'index')->name('admin.enquiry.index');
        Route::post('/store', 'store')->name('admin.enquiry.store');
        Route::delete('/delete/{id}', 'destroy')->name('admin.enquiry.delete');
    });


    Route::prefix('activityCategory')->controller(ActivityCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('admin.activityCategory.index');
        Route::get('/create', 'create')->name('admin.activityCategory.create');
        Route::post('/store', 'store')->name('admin.activityCategory.store');
        Route::get('/edit/{id}', 'edit')->name('admin.activityCategory.edit');
        Route::put('/update/{id}', 'update')->name('admin.activityCategory.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.activityCategory.delete');
    });

    Route::prefix('activity')->controller(ActivityController::class)->group(function () {
        Route::get('/', 'index')->name('admin.activity.index');
        Route::get('/create', 'create')->name('admin.activity.create');
        Route::post('/store', 'store')->name('admin.activity.store');
        Route::get('/edit/{id}', 'edit')->name('admin.activity.edit');
        Route::put('/update/{id}', 'update')->name('admin.activity.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.activity.delete');
    });

});

