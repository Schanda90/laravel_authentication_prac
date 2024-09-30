@extends('layout')

@section('title')

@section('content')

<div class="container">
<h1>Welcome to your Dashboard, {{ $user->name }}!</h1>
<h2>Your Email: {{ $user->email }}</h2>
</div>
<br>
<div class="container">
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
</div> 

@endsection