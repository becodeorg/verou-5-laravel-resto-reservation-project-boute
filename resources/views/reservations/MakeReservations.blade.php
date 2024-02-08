@extends('layout')

@section('title')
    Make new reservation
@endsection

<script defer>
    document.addEventListener('DOMContentLoaded', () => {
        const calendarEl = document.getElementById('calendar-container');
        const timePickedDiv = document.getElementById('time-picked');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            height: 700, // Set the desired height here
            aspectRatio: 2, // Set the aspect ratio (width/height) here
            initialView: 'timeGridWeek',
            slotMinTime: '8:00:00',
            slotMaxTime: '19:00:00',
            events: <?php echo json_encode($events); ?>,
            dateClick: function(info) {
                // Get the start and end times from the clicked date
                var startTime = info.date;
                var endTime = new Date(startTime.getTime());
                endTime.setHours(endTime.getHours() + 2);
                calendar.select(startTime, endTime);
                timePickedDiv.innerText = startTime;
                document.getElementById('start_time').value = startTime.toISOString();
            },
            eventMouseEnter: function(mouseEnterInfo) {
                // Handle mouse enter event for calendar events
                // Add hover effect or other logic
                console.log('Mouse enter on event: ', mouseEnterInfo.event);
            },

            // Add more options or callbacks as needed
            // ...
        });

        calendar.render();
    });
</script>


@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg"> <!-- Adjust the maximum width here -->
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Reservation Form</h2>
        </div>

        <div id="calendar-container" class="w-full md:w-full mx-auto mt-6"></div> <!-- Adjust the width here -->

        <div id="time-picked"></div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('reservation-store') }}" method="POST">
                @csrf
                <input type="hidden" id="start_time" name="start_time">
                <div>
                    <label for="first_name" class="block text-sm font-medium leading-6 text-orange-900">First Name</label>
                    <div class="mt-2">
                        <input id="first_name" name="first_name" type="text" autocomplete="given-name" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium leading-6 text-orange-900">Last Name</label>
                    <div class="mt-2">
                        <input id="last_name" name="last_name" type="text" autocomplete="family-name" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-orange-900">Email Address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="number_of_guests" class="block text-sm font-medium leading-6 text-orange-900">Number of
                        People</label>
                    <div class="mt-2">
                        <input id="number_of_guests" name="number_of_guests" type="number" min="1" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit
                        Reservation</button>
                </div>
            </form>

            @if (isset($date))
                <h1 class="text-center text-2xl mt-6 font-bold leading-9 tracking-tight text-gray-900">
                    Reservation for {{ $date }}
                </h1>
            @endif
        </div>
    </div>
@endsection
