    <header>
        <nav class="w-screen justify-center align-middle p-10 border-b-4 border-indigo-600">
            <ul class="w-screen flex flex-row text-2xl justify-evenly">
                <li><a href="{{ route("home") }}">Home</a></li>
                @guest
                <li><a href="{{ route("MakeReservations") }}">Make Reservation</a></li>
                @endguest
                <li><a href="{{ route("Menu") }}">Menu</a></li>
                @auth
                <li><a href="{{ route("showAllReservations") }}">Reservations</a></li>
                @endauth
                <hr>
                <hr>
                @guest
                    <li><a href="{{ route("showAdminLogin") }}">Admin</a></li>
                @endguest
                @auth
                    <li><form action="{{ route("logout") }}"method="POST">@csrf<button>Logout</button></form></li>
                @endauth
                
            </ul>
        </nav>
    </header>
