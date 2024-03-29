<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Error;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();

        return view("reservations.Reservations", [
            "reservations" => $reservation,
        ]);
    }

    public function store(Request $request)
    {
        $message = "";
        try {
            $this->validate($request, [
                'first_name' => ['required', 'max:255'],
                'last_name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'number_of_guests' => ['required', 'numeric', 'between:1,8']
            ]);

            $time = Carbon::parse($request->start_time);
            $table = $this->findTable($time, $request->number_of_guests);
            if ($table == null) $message = "No table found";

            Reservation::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'number_of_guests' => $request->number_of_guests,
                'time' => Carbon::parse($request->start_time),
                'table_id' => $table->id
            ]);

            return redirect('/')->with('success', 'Reservation created successfully')->with('successTime', $time)->with('successTable', $table->id);
        } catch (\Exception $e) {
            // Log the error or handle it in some way
            return redirect('/')->with('error', $message == "" ? 'Error creating reservation. Please try again.' : $message);
        }
    }

    private function findTable($time, $guests)
    {
        foreach (Table::all() as $table) {
            if ($table->seats < $guests) continue;

            $reservation = $table->reservations
                ->first(function ($reservation) use ($time) {
                    $reservationTime = Carbon::parse($reservation->time);
                    $endTime = Carbon::parse($time)->addHours(2);
                    return $reservationTime >= $time && $reservationTime < $endTime;
                });

            if (!$reservation) {
                return $table;
            }
        }

        return null;
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect('/')->with('success', 'Reservation deleted successfully');
    }

    public function showForm(Request $request)
    {
        //    $date = $request->query('date');
        // Additional logic if needed
        $specificDates = [];

        $events = [];

        foreach ($specificDates as $date) {
            // Add an event for each day
            $events[] = [
                'title' => 'Event on ' . $date,
                'start' => $date . 'T08:00:00',
                'end' => $date . 'T17:00:00',
            ];
        }

        // foreach (Reservation::all() as $reservation) {
        //     $events[] = [
        //         'title' => $reservation->id . " " . $reservation->last_name,
        //         'start' => Carbon::parse($reservation->time),
        //         'end' => Carbon::parse(
        //             $reservation->time
        //         )->addHours(2)
        //     ];
        // }
        //    return view('reservations.MakeReservations', ['date' => $date]);

        return view('reservations.MakeReservations', ['events' => $events]);
    }
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.editReservations', compact('reservation'));
    }
    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'time' => 'required|date',
            'number_of_guests' => 'required|integer|min:1',
        ]);

        // Find the reservation by ID
        $reservation = Reservation::findOrFail($id);

        // Update the reservation with the form data
        $reservation->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'time' => $request->input('time'),
            'number_of_guests' => $request->input('number_of_guests'),
        ]);
    }
}
