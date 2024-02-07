@extends('layout')

@section('content')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const calendarEl = document.getElementById('calendar-container');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                height: 400, // Set the desired height here
                aspectRatio: 1.5, // Set the aspect ratio (width/height) here
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: <?php echo json_encode($events); ?>,
                dateClick: function (info) {
                    const selectedDate = info.dateStr;

                    // Display a confirmation window
                    const isConfirmed = confirm(`Do you want to make a reservation on ${selectedDate}?`);

                    if (isConfirmed) {
                        console.log('Reservation confirmed for: ' + selectedDate);
                        // Redirect to the reservation form with the selected date
                        window.location.href = '/reservations/MakeReservations?date=' + selectedDate;
                    } else {
                        console.log('Reservation canceled');
                    }
                },
                eventMouseEnter: function (info) {
                    // Handle mouse enter event for calendar events
                    // Add hover effect or other logic
                    console.log('Mouse enter on event: ', info.event);
                },
                // Add more options or callbacks as needed
                // ...
            });

            calendar.render();
        });

    </script>

    <style>
.event-item {
    background-color: lightgrey;
    cursor: pointer;
}

.event-hover {
    background-color: lightblue;
}

.empty-slot {
    background-color: lightyellow;
    cursor: pointer;
}

.empty-slot-hover {
    background-color: lightgreen;
}

/* #calendar-container {
    height: 1600px; 
    width: 600px; 
} */

    </style>

<main class="w-screen flex flex-col justify-even items-center h-screen">
    <section class="w-full flex flex-row justify-even items-center h-1/2">
        <div class="w-1/2 h-full flex flex-col justify-center items-center">
            <h1 class="mt-10 text-8xl ml-16 font-bold">Come for the best Sushi in town!</h1>
        </div>
    </section>
    <section class="w-full flex flex-row justify-even items-center h-1/2">
        <div class="w-1/2 h-full flex flex-col justify-center items-center">
            <h1 id="table-text" class="mt-10 text-5xl justify-start font-bold">See for available tables</h1>
            <p id="table-paragraph" class="mt-10 text-2xl text-indigo-600 font-bold">Click on a date and hour!</p>
        </div>
        <div id="calendar-container" class="w-1/2 h-full"></div>
    </section>
</main>

@endsection
