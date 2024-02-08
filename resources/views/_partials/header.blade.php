<header>
    <nav class="w-screen justify-center align-middle p-10 border-b-4 border-orange-600">
        <ul class="w-screen flex flex-row text-white text-2xl justify-evenly items-center">
            <li class="{{ request()->routeIs('home') ? 'border-b-4 border-orange-600 py-3' : '' }}">
                <a href="{{ route("home") }}">Home</a>
            </li>
            @guest
                <li class="{{ request()->routeIs('MakeReservations') ? 'border-b-4 border-orange-600 py-3' : '' }}">
                    <a href="{{ route("MakeReservations") }}">Make Reservation</a>
                </li>
            @endguest
            @auth
                <li class="{{ request()->routeIs('showAllReservations') ? 'border-b-4 border-orange-600 py-3' : '' }}">
                    <a href="{{ route("showAllReservations") }}">Reservations</a>
                </li>
            @endauth
            <li class="{{ request()->routeIs('showMenu') ? 'border-b-4 border-orange-600 py-3' : '' }}">
                <a href="{{ route("showMenu") }}">Menu</a>
            </li>
            <hr>
            <hr>
            @guest
                <li class="px-5 py-2 border-4 border-orange-600 rounded-xl hover:bg-orange-700">
                    <a href="{{ route("showAdminLogin") }}">Admin</a>
                </li>
            @endguest
            @auth
                <li class="{{ request()->routeIs('showAdminInfo') ? 'border-b-4 border-orange-600 py-3' : '' }}">
                    <a href="{{ route("showAdminInfo") }}">Admin info</a>
                </li>
                <li class="{{ request()->routeIs('dashboard') ? 'border-b-4 border-orange-600 py-3' : '' }}">
                    <a href="{{ route("dashboard") }}">Dashboard</a>
                </li>
                <li class="px-5 py-2 border-4 border-orange-600 rounded-xl hover:bg-orange-700">
                    <form action="{{ route("logout") }}" method="POST">@csrf<button>Logout</button></form>
                </li>
            @endauth
        </ul>
    </nav>
</header>
