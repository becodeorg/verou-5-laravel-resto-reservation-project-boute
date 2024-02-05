@extends('layout')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: <?php echo json_encode($events); ?>,
            });
            calendar.render();
        });
    </script>

    <!-- Your HTML content here -->

    <main class="w-screen flex flex-col justify-even items-center h-screen">
        <section class="w-full flex flex-row justify-even items-center h-1/2">
            <!-- Your existing content here -->
        </section>
        <section class="w-full flex flex-row justify-even items-center h-1/2">
            <div class="w-1/2 h-full flex flex-col justify-center items-center">
                <h1 class="mt-10 text-5xl font-bold">See for available tables</h1>
                <div id="calendar"></div>
            </div>
        </section>
    </main>
@endsection
