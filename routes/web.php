<?php

use App\Http\Controllers\AdminEventsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\UserEventsController;
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

Route::get('/registration', [AuthManager::class, 'register'])->name('register');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('register.post');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    // USE BY BOTH USER AND ADMIN
    Route::get('/admin_dashboard', function() {
        return view('manageDashboardAndContent.home_dashboard');
    })->name('homedashboard');

    Route::get('/profile', [AdminUsersController::class, 'displayUserData'])->name('profile');
    Route::put('/profile/{id}', [AdminUsersController::class, 'updateUserData']);


    // ADMINISTRATOR ONLY
    Route::get('/manage_events', [AdminEventsController::class, 'readAllEvent'])->name('manage_events');
    Route::post('/manage_events', [AdminEventsController::class, 'createEvent']);
    Route::delete('/manage_events/{id}', [AdminEventsController::class, 'destroyEvent']);

    Route::get('/manage_event_details/{id}', [AdminEventsController::class, 'showEventDetailsAndParticipant'])->name('manage_event_details');
    Route::put('/manage_event_details/{id}', [AdminEventsController::class, 'updateEvent']);

    Route::get('/listofuser', [AdminUsersController::class, 'retrieveAllUser'])->name('list_of_user');
    Route::delete('/listofuser/{id}', [AdminUsersController::class, 'destroyUser']);


    // USER ONLY
    Route::get('/about_us', function() {
        return view('manageDashboardAndContent.about_us');
    });

    Route::get('/all_event', [UserEventsController::class, 'retrieveAllEvent'])->name('all_event');

    Route::get('/view_event/{id}', [UserEventsController::class, 'retrieveEventDetails'])->name('view_event');
    Route::post('/view_event/{id}', [UserEventsController::class, 'joinEvent']);
});
