<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', [MenuController::class, 'index'])->name("showMenu");

Route::get('/all_reservations', [ReservationController::class, 'index'])->name("showAllReservations");
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservationDestroy');
Route::post('/Reservations/MakeReservation', [ReservationController::class, 'store'])->name('reservation-store');

Route::get('/reservations/MakeReservations', [ReservationController::class, 'showForm'])->name('MakeReservations');


Route::get('/Admin', function () {
    return view('admin/index');
})->name("showAdminLogin");


Route::get('/admin/admin_info', [UserController::class, 'show'])->name("showAdminInfo")->middleware('auth');
Route::post('/admin/index', [UserController::class, 'login'])->name("loginUser");
Route::post('/logout', [UserController::class, 'logout'])->name("logout");

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/{date}', [DashboardController::class, 'showDate'])->name('dashboardShowDate');
