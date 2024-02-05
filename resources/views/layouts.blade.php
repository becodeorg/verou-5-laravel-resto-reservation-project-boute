<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
    <header>
        <!-- Your header content goes here -->
        <nav>
        </nav>
    </header>

    <main class="font-sans container mx-auto mt-8">

    @yield('content')
    </main>

    <footer class="mt-8 text-2xl">
        <!-- Your footer content goes here -->
        <p>&copy; {{ date('Y') }} Your Resto</p>
    </footer>
</body>
</html>
