<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Additional head elements such as stylesheets, scripts, etc. -->
</head>
<body class="font-sans">
    <header>
        <!-- Your header content goes here -->
        <nav>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
    <h1>Hello Layout page!</h1>
    @yield('content')
    </main>

    <footer class="mt-8">
        <!-- Your footer content goes here -->
        <p>&copy; {{ date('Y') }} Your Website</p>
    </footer>
</body>
</html>
