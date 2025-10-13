@extends('layouts.layout')

@section('title', 'Join The Cause!')

@section('content')
<section id="registerSection">
    <h1>Join The Cause!</h1>
    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>
</section>
@endsection