<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();

        return view("reservations/Reservations", [
            "reservations" => $reservation,
        ]);
    }
}
