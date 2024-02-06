@extends('layout')

@section('title')
Sign in
@endsection

@section('content')

<div class="admin_info">
    <strong>ID:</strong> {{ Auth::user()->id }}</a>
    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <br>
    <br>
</div>

@endsection