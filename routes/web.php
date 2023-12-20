<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about_us', function() {
    return view('manageDashboardAndContent.about_us');
});

Route::get('/user_dashboard', function() {
    return view('manageDashboardAndContent.user_dashboard');
});

Route::get('/admin_dashboard', function() {
    return view('manageDashboardAndContent.admin_dashboard');
});

Route::get('/admin_profile', function() {
    return view('manageProfile.admin_profile');
});

Route::get('/user_profile', function() {
    return view('manageProfile.user_profile');
});