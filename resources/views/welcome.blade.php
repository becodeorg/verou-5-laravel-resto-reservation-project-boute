@extends('layout')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', () => {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek', // weekly view
        slotMinTime: '8:00:00', // slot max time and min time
        slotMaxTime: '19:00:00',
        events: <?php echo json_encode($events); ?>,
        dateClick: (info) => {
            // Handle Date click event
            const selectedDate = info.dateStr;
            console.log(`Clicked on: ${selectedDate}`);
            
            // Add logic to handle reservation here
            const confirmed = confirm(`Do you want to make a reservation for ${selectedDate}?`);
            
            if (confirmed) {
                // Redirect to the reservation form with the selected date
                window.location.href = `/reservations/MakeReservations?date=${selectedDate}`;
            }
        }
    });
    calendar.render();
});

    </script>

    <main class="w-screen flex flex-col justify-even items-center h-screen">
        <section class="w-full flex flex-row justify-even items-center h-1/2">
            <div class="w-1/2 h-full flex flex-col justify-center items-center">
                <h1 class="mt-10 text-8xl ml-16 font-bold">Come for the best Sushi in town!</h1>
            </div>
        </section>
        <section class="w-full flex flex-row justify-even items-center h-1/2">
            <div class="w-full h-full flex flex-col justify-center items-center">
                <h1 class="mt-10 text-5xl font-bold">See for available tables</h1>
                <div class="w-full h-full" id="calendar"></div>
            </div>
        </section>
    </main>
@endsection
