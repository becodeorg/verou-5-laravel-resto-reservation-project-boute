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
})->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/partials/header', function () {
    return view('partials.header');
});

Route::get('reservations/Reservations', function () {
    return view('reservations.Reservations');
})->name('Reservations');

Route::get('reservations/MakeReservations', function () {
    return view('reservations.MakeReservations');
})->name('MakeReservations');

Route::get('/Menu', function () {
    return view('Menu');
})->name("Menu");