<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalReservations = Reservation::count();
        $totalGuestsBooked = Reservation::sum('number_of_guests');
        $averageGuestsPerReservation = $totalReservations > 0 ? round($totalGuestsBooked / $totalReservations, 2) : 0;
        $reservationsPerDay = Reservation::selectRaw('DATE(time) as date, COUNT(*) as total_reservations')
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

        return view('admin/dashboard', compact('totalReservations', 'totalGuestsBooked', 'reservationsPerDay', 'averageGuestsPerReservation'));
    }
    public function showDate($date)
{
    // Fetch reservations for the selected date
    $reservations = Reservation::whereDate('time', $date)->get();

    return view('admin.date_detail', compact('date', 'reservations'));
}
}
