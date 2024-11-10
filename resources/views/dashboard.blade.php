@extends('components.layout')

@section('title', 'Dashboard')

@section('content')
<header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="{{ url('/') }}">?Dashboard</a></div>
            <ul></ul>
         </div>
    </nav>
</header>

<main>
@section('content')
     
    @endsection
</main>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 My WebDev Portfolio. All Rights Reserved.</p>
</footer>

@endsection
