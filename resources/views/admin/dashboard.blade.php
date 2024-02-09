@extends('layout')

@section('title')
Dashboard
@endsection

@section('content')

<body class="bg-gray-100">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
    
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Total Reservations</h2>
                <p class="text-2xl">{{ $totalReservations }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Total Guests Booked</h2>
                <p class="text-2xl">{{ $totalGuestsBooked }}</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md mt-6">
            <h2 class="text-xl font-bold mb-2">Average Guests Per Reservation</h2>
            <p class="text-2xl">{{ $averageGuestsPerReservation }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md mt-6">
            <h2 class="text-xl font-bold mb-2">Total Reservations Per Day</h2>
            <ul>
                @foreach($reservationsPerDay as $reservation)
                    <li class="text-lg">
                        <a href="{{ route('dashboardShowDate', $reservation->date) }}">
                            {{ $reservation->date }}: <hr> {{ $reservation->total_reservations }}
                            <br>
                            <br>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    </body>
@endsection