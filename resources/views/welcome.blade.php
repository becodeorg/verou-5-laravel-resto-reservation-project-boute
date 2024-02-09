@extends('layout')

@section('content')
    <main class="w-screen flex flex-col justify-even items-center h-screen">
        <section class="w-full flex flex-row justify-even items-center h-1/2">
            <div class="w-1/2 h-full flex flex-col justify-center items-center">
                <h1 class="mt-10 text-8xl ml-16 text-white font-bold">Come for the best Sushi in town!</h1>
            </div>
            <div class="w-1/2 h-full">
            <img class="w-full" src="{{ asset('/assets/Sushi_stick.png') }}" alt="Sushi with chopstick">

            </div>
        </section>
        <section class="w-full flex flex-row justify-even items-center h-1/2">
            <div class="w-1/2 h-full flex flex-col justify-center items-start">
                <h1 id="table-text" class="mt-10 text-5xl text-white ml-16 font-bold">See for available tables</h1>
                <a href="{{ route("MakeReservations") }}" class="block group">
                    <p id="table-paragraph" class="mt-5 ml-16 text-2xl text-orange-600 font-bold group-hover:border-b-4 pb-3 group-hover:border-orange-600 transition duration-600">
                        Check for a date and hour!
                    </p>
                </a>
            </div>
        </section>
    </main>
@endsection
