<?php

use App\Http\Controllers\ReservationController;
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
})->name('home');

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

Route::post('/Reservations/MakeReservation', [ReservationController::class, 'store'])->name('reservation-store');
