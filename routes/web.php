<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardEventController;

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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/events', DashboardEventController::class)->middleware('auth');

Route::resource('/dashboard/users', AdminUserController::class)->middleware('admin');

//manage location
Route::resource('/dashboard/locations', LocationController::class);

//manage position
Route::resource('/dashboard/positions', PositionController::class);

//manage event status
// Route::get('/dashboard/events/{id}', DashboardEventController::class)->middleware('admin');
Route::get('/dashboard/events/approved/{id}', [DashboardEventController::class, 'approved'])->middleware('admin'); 
Route::get('/dashboard/events/declined/{id}', [DashboardEventController::class, 'declined'])->middleware('admin');

//manage location status
Route::get('/dashboard/locations/approved/{id}', [LocationController::class, 'approved'])->middleware('admin'); 
Route::get('/dashboard/locations/declined/{id}', [LocationController::class, 'declined'])->middleware('admin');

//manage twilio
Route::get('/dashboard/sms', function () {
    return view('dashboard.sms');
});
Route::post('/dashboard/sms', [SMSController::class, 'sendSMS']);
