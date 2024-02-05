@extends('layout')
@section('title')
Reservations
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
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
    </head>
    <body>
        <div class="container">
            <h2>Reservation Details</h2>
            
            <!-- Loop through each reservation using Blade syntax -->
            {{-- @foreach ($reservations as $reservation)
                <div class="reservation">
                    <h3>Reservation #{{ $reservation->id }}</h3>
                    <p><strong>Name:</strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
                    <p><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p><strong>Number of People:</strong> {{ $reservation->number_of_people }}</p>
                    <p><strong>Meal Choice:</strong> {{ $reservation->meal_choice }}</p>
                </div>
                @endforeach --}}
        </div>
    </body>
    </html>
    

   

@endsection
