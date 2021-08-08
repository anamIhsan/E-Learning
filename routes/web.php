<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController;
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
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::get('/register', [RegisterController::class, 'index'])
    ->name('register');

// User
Route::get('/student/home', [StudentHomeController::class, 'index'])
    ->name('user-home');
Route::get('/student/categories', [StudentCategoryController::class, 'index'])
    ->name('user-categories');
Route::get('/student/categories/all', [StudentAllCategoryController::class, 'index'])
    ->name('all-category');
Route::get('/student/class', [ClassController::class, 'index'])
    ->name('class');
Route::get('/student/class/video', [VideoController::class, 'index'])
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

    // Student
Route::get('/Admin/dashboard/student', [StudentController::class, 'index'])
    ->name('admin-dashboard-student');
Route::get('/Admin/dashboard/student/create', [StudentController::class, 'create'])
    ->name('admin-dashboard-student-create');
Route::get('/Admin/dashboard/student/edit', [StudentController::class, 'edit'])
    ->name('admin-dashboard-student-edit');

    // Course
Route::get('/Admin/dashboard/course', [CourseController::class, 'index'])
    ->name('admin-dashboard-course');
Route::get('/Admin/dashboard/course/create', [CourseController::class, 'create'])
    ->name('admin-dashboard-course-create');
Route::get('/Admin/dashboard/course/edit', [CourseController::class, 'edit'])
    ->name('admin-dashboard-course-edit');
Route::get('/Admin/dashboard/course/detail', [CourseController::class, 'show'])
    ->name('admin-dashboard-course-detail');

// Chapter
Route::get('/Admin/dashboard/chapter', [ChapterController::class, 'index'])
    ->name('admin-dashboard-chapter');
Route::get('/Admin/dashboard/chapter/create', [ChapterController::class, 'create'])
    ->name('admin-dashboard-chapter-create');
Route::get('/Admin/dashboard/chapter/edit', [ChapterController::class, 'edit'])
    ->name('admin-dashboard-chapter-edit');
Route::get('/Admin/dashboard/chapter/detail', [ChapterController::class, 'show'])
    ->name('admin-dashboard-chapter-detail');


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
Route::get('/Admin/dashboard/account', [SettingController::class, 'index'])
    ->name('admin-dashboard-account');




// <!-- al muminun /qori ali al-hudzaifi mujawwad/:6: -->