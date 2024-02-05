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

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'number_of_people' => ['required', 'numeric', 'between:1,8']
        ]);

        Reservation::create($request->all());

        return redirect('/')->with('success', 'Reservation created successfully');
    }
}
