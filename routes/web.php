<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
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

Route::get('/all_reservations', [ReservationController::class, 'index'])->name("showAllReservations");

Route::get('reservations/MakeReservations', function () {
    return view('reservations.MakeReservations');
})->name('MakeReservations');

Route::get('/Menu', function () {
    return view('Menu');
})->name("Menu");

Route::get('/Admin', function () {
    return view('admin/index');
})->name("showAdminLogin");

Route::post('/admin/index', [UserController::class, 'login'])->name("loginUser");

Route::post('/Reservations/MakeReservation', [ReservationController::class, 'store'])->name('reservation-store');
Route::post('/reservation/MakeReservation', [ReservationController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->name("logout");