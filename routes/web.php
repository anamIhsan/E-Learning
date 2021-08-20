<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\AllCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\AllCategoryController as StudentAllCategoryController;
use App\Http\Controllers\Student\CategoryController as StudentCategoryController;
use App\Http\Controllers\Student\ClassController;
use App\Http\Controllers\Student\DashboardAccountController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\DashboardCourseController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;
use App\Http\Controllers\Student\VideoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])
    ->name('home');
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');
Route::get('/categories/all', [AllCategoryController::class, 'index'])
    ->name('all-category-before');

// Auth
Route::get('/login', [LoginController::class, 'login'])
    ->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])
    ->name('authenticate');
Route::get('/register', [RegisterController::class, 'index'])
    ->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])
    ->name('register-store');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // User
    Route::get('/student/home', [StudentHomeController::class, 'index'])
        ->name('user-home');
    Route::get('/student/categories/{id}', [StudentCategoryController::class, 'index'])
        ->name('user-categories');
    Route::get('/student/categories/all', [StudentAllCategoryController::class, 'index'])
        ->name('all-category');
    Route::get('/student/class/{id}', [ClassController::class, 'index'])
        ->name('class');
    Route::get('/student/class/video/{id}', [VideoController::class, 'index'])
        ->name('video');

    // Dashboard User
    Route::get('/student/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/student/dashboard/course', [DashboardCourseController::class, 'index'])
        ->name('dashboard-course');
    Route::get('/student/dashboard/account', [DashboardAccountController::class, 'index'])
        ->name('dashboard-account');

    // Dashboard Admin
    Route::get('/Admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin-dashboard');

    // Course
    Route::get('/Admin/dashboard/course', [CourseController::class, 'index'])
        ->name('admin-dashboard-course');
    Route::get('/Admin/dashboard/course/create', [CourseController::class, 'create'])
        ->name('admin-dashboard-course-create');
    Route::post('/Admin/dashboard/course/create', [CourseController::class, 'store'])
        ->name('admin-dashboard-course-store');
    Route::get('/Admin/dashboard/course/edit/{id}', [CourseController::class, 'edit'])
        ->name('admin-dashboard-course-edit');
    Route::put('/Admin/dashboard/course/update/{id}', [CourseController::class, 'update'])
        ->name('admin-dashboard-course-update');
    Route::delete('/Admin/dashboard/course/delete/{id}', [CourseController::class, 'destroy'])
        ->name('admin-dashboard-course-delete');
    Route::get('/Admin/dashboard/course/detail/{id}', [CourseController::class, 'show'])
        ->name('admin-dashboard-course-detail');

    // Chapter
    Route::get('/Admin/dashboard/chapter/{id}', [ChapterController::class, 'index'])
        ->name('admin-dashboard-chapter');
    Route::get('/Admin/dashboard/chapter/create/{id}', [ChapterController::class, 'create'])
        ->name('admin-dashboard-chapter-create');
    Route::post('/Admin/dashboard/chapter/store/{id}', [ChapterController::class, 'store'])
        ->name('admin-dashboard-chapter-store');
    Route::get('/Admin/dashboard/chapter/edit/{id}', [ChapterController::class, 'edit'])
        ->name('admin-dashboard-chapter-edit');
    Route::put('/Admin/dashboard/chapter/update/{id}', [ChapterController::class, 'update'])
        ->name('admin-dashboard-chapter-update');
    Route::delete('/Admin/dashboard/chapter/delete/{id}', [ChapterController::class, 'destroy'])
        ->name('admin-dashboard-chapter-delete');

    // Video
    Route::get('/Admin/dashboard/video/create/{id}', [AdminVideoController::class, 'create'])
        ->name('admin-dashboard-video-create');
    Route::post('/Admin/dashboard/video/store/{id}', [AdminVideoController::class, 'store'])
        ->name('admin-dashboard-video-store');
    Route::get('/Admin/dashboard/video/edit/{id}/{course?}', [AdminVideoController::class, 'edit'])
        ->name('admin-dashboard-video-edit');
    Route::put('/Admin/dashboard/video/update/{id}', [AdminVideoController::class, 'update'])
        ->name('admin-dashboard-video-update');
    Route::delete('/Admin/dashboard/video/delete/{id}', [AdminVideoController::class, 'destroy'])
        ->name('admin-dashboard-video-delete');

    // Category
    Route::get('/Admin/dashboard/category', [AdminCategoryController::class, 'index'])
        ->name('admin-dashboard-category');
    Route::get('/Admin/dashboard/category/create', [AdminCategoryController::class, 'create'])
        ->name('admin-dashboard-category-create');
    Route::post('/Admin/dashboard/category/create', [AdminCategoryController::class, 'store'])
        ->name('admin-dashboard-category-store');
    Route::get('/Admin/dashboard/category/edit/{id}', [AdminCategoryController::class, 'edit'])
        ->name('admin-dashboard-category-edit');
    Route::put('/Admin/dashboard/category/update/{id}', [AdminCategoryController::class, 'update'])
        ->name('admin-dashboard-category-update');
    Route::delete('/Admin/dashboard/category/delete/{id}', [AdminCategoryController::class, 'destroy'])
        ->name('admin-dashboard-category-delete');

    // Account
    Route::get('/Admin/dashboard/account/{id}', [SettingController::class, 'edit'])
        ->name('admin-dashboard-account');
    Route::put('/Admin/dashboard/account/update/{id}', [SettingController::class, 'update'])
        ->name('admin-dashboard-account-update');
});




// <!-- al imran / mahmoud alhosary / 1:25: -->