@extends('layout')
@section('title')
Reservations
@endsection
@section('content')
        <style>
            /* Add your CSS styles here */
            /* This is just basic styling, you can customize it further */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f7f7f7;
                color: #333;
            }
            .container {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                margin-top: 0;
            }
            .reservation {
                border-bottom: 1px solid #ddd;
                padding-bottom: 20px;
                margin-bottom: 20px;
            }
            .reservation:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }
            .reservation h3 {
                margin-bottom: 10px;
            }
            .reservation p {
                margin: 5px 0;
            }
        </style>
    <body>
        
            
            
            @foreach ($reservations as $reservation)
            <div class="container">
                <div class="reservations">
                    <strong>Reservation number:</strong> {{ $reservation->id }}</a>
                    <p><strong>First name:</strong> {{ $reservation->first_name }}</p>
                    <p><strong>Last name:</strong> {{ $reservation->last_name }}</p>
                    <p><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p><strong>Number of guests:</strong> {{ $reservation->number_of_guests }}</p>
                    <p><strong>Date of Reservation:</strong> {{ $reservation->time }}</p>
                    <br>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
                    <br>
                    <form action="{{ route('reservationDestroy', $reservation->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
                    </form>

                </div>
            </div>
            @endforeach
        
    </body>
    </html>
    

   

@endsection
