@extends('layout')

@section('title')
Sign in
@endsection

@section('content')

<div class="admin_info text-white">
    <strong class="text-white">ID:</strong> {{ Auth::user()->id }}</a>
    <p class="text-white"><strong class="text-white">Name:</strong> {{ Auth::user()->name }}</p>
    <p class="text-white"><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <br>
    <br>
</div>

@endsection