@extends('layout')

@section('title')
Dashboard
@endsection

@section('content')

<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold mb-6">Date: {{ $date }}</h1>
        <ul>
            @foreach($reservations as $reservation)
                <li class="border-b border-gray-200 py-4">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h2 class="text-lg font-semibold">{{ $reservation->first_name }} {{ $reservation->last_name }}</h2>
                            <p class="text-gray-500">{{ $reservation->email }}</p>
                        </div>

                    </div>
                    <div>
                        <p class="text-gray-700"><span class="font-semibold">Number of Guests:</span> {{ $reservation->number_of_guests }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

@endsection