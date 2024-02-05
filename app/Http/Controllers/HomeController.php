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
        // Define an array of specific dates for the next two weeks
        $specificDates = [
            '2024-02-06',
            '2024-02-07',
            '2024-02-08',
            // Add more dates as needed
        ];

        // Create an array to store events
        $events = [];

        // Generate events for the specific dates
        foreach ($specificDates as $date) {
            // Add an event for each day
            $events[] = [
                'title' => 'Event on ' . $date,
                'start' => $date . 'T08:00:00',
                'end' => $date . 'T17:00:00',
            ];
        }

        // Get appointments from the database
        $appointments = Appointment::with(['client', 'employee'])->get();

        // Add database appointments to the events array
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
