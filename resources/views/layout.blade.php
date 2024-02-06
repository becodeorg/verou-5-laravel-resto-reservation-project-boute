<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col items-center justify-between min-h-screen">

    <!-- Header -->
    @include('_partials.header')

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Your main content goes here -->
        @yield('content')
    </main>

    <!-- Footer -->
    @include('_partials.footer')
    @stack('scripts')
</body>
</html>

