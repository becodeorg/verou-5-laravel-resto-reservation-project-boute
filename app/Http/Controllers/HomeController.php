<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $specificDates = [
            '2024-02-06',
            '2024-02-07',
            '2024-02-08',
     
        ];

        $events = [];

        foreach ($specificDates as $date) {
            // Add an event for each day
            $events[] = [
                'title' => 'Event on ' . $date,
                'start' => $date . 'T08:00:00',
                'end' => $date . 'T17:00:00',
            ];
        }

        $appointments = Appointment::with(['client', 'employee'])->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->client->name . ' ('.$appointment->employee->name.')',
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
            ];
        }

        return view('welcome', compact('events'));
    }
}