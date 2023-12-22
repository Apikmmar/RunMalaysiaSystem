<?php

use App\Http\Controllers\AdminEventsController;
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


// ADMIN
Route::get('/admin_dashboard', function() {
    return view('manageDashboardAndContent.admin_dashboard');
});

Route::get('/admin_profile', function() {
    return view('manageProfile.admin_profile');
});

Route::get('/event_details', function() {
    return view('manageRunningEvents.manage_event_details');
});

Route::get('/listofuser', function() {
    return view('manageUserRecord.user_events_record');
});


// USER
Route::get('/user_dashboard', function() {
    return view('manageDashboardAndContent.user_dashboard');
});

Route::get('/all_event', function() {
    return view('manageRunningEvents.running_events');
});

Route::get('/view_event', function() {
    return view('manageRunningEvents.event_details');
});

Route::get('/user_profile', function() {
    return view('manageProfile.user_profile');
});

Route::get('/about_us', function() {
    return view('manageDashboardAndContent.about_us');
});

Route::get('/manage_events', function() {
    return view('manageRunningEvents.manage_events');
})->name('manage_events');

Route::post('/manage_events', [AdminEventsController::class, 'createEvent']);