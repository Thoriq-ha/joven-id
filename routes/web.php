<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',  [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);

Auth::routes();

// Explore Resource
Route::prefix('explore')->group(function () {
    Route::get('/', [ExploreController::class, 'index'])->name('explore.index');
    Route::get('search', [ExploreController::class, 'search'])->name('explore.search');
    Route::get('week', [ExploreController::class, 'week'])->name('explore.week');
    Route::get('month', [ExploreController::class, 'month'])->name('explore.month');
    Route::get('all', [ExploreController::class, 'all'])->name('explore.all');
    Route::get('{id}', [ExploreController::class, 'show'])->name('explore.show');
});

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Dashboard Event Resource
Route::prefix('dashboard')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('dashboard.event');
    Route::get('event/create', [EventController::class, 'createEvent'])->name('dashboard.createEvent');
    Route::post('event', [EventController::class, 'storeEvent']);
    Route::get('event/{id}/edit', [EventController::class, 'editEvent'])->name('dashboard.editEvent');
    Route::put('event/{id}', [EventController::class, 'updateEvent']);
    Route::get('event/{id}/detail', [EventController::class, 'detailEvent'])->name('dashboard.detailEvent');
});

// Dashboard Ticket Resource
Route::prefix('dashboard')->group(function () {
    Route::get('ticket', [TicketController::class, 'index'])->name('dashboard.ticket');
    Route::get('ticket/pdf/{id}', [TicketController::class, 'pdf'])->name('dashboard.ticket.pdf');
});

// Dashboard Profile Resource
Route::prefix('dashboard')->group(function () {
    Route::get('profile', 'ProfileController@showProfile')->name('profile');
    Route::put('profile', 'ProfileController@updateProfile');
    Route::get('password', 'ProfileController@showPassword')->name('password');
    Route::put('password', 'ProfileController@updatePassword');
});

// Join Event
Route::prefix('explore/{id}')->group(function () {
    Route::get('join', 'JoinController@join')->middleware('auth');
});
