<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
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

    // Category
Route::get('/Admin/dashboard/category', [AdminCategoryController::class, 'index'])
    ->name('admin-dashboard-category');
Route::get('/Admin/dashboard/category/create', [AdminCategoryController::class, 'create'])
    ->name('admin-dashboard-category-create');
Route::get('/Admin/dashboard/category/edit', [AdminCategoryController::class, 'edit'])
    ->name('admin-dashboard-category-edit');

Route::get('/Admin/dashboard/account', [SettingController::class, 'index'])
    ->name('admin-dashboard-account');




// <!-- at tur/muhammad taha al junayd/:16: -->