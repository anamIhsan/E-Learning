<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/categories', function () {
    return view('pages.category');
});

Route::get('/all-categories', function () {
    return view('pages.allCategory');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/user_home', function () {
    return view('pages.user.home');
});

Route::get('/user_categories', function () {
    return view('pages.user.category');
});

Route::get('/user_all-categories', function () {
    return view('pages.user.allCategory');
});

Route::get('/class', function () {
    return view('pages.user.class');
});

Route::get('/video', function () {
    return view('pages.user.video');
});

Route::get('/dashboard', function () {
    return view('pages.user.dashboard');
});

Route::get('/dashboard/account', function () {
    return view('pages.user.dashboard-account');
});