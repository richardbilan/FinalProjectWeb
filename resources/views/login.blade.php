@extends('components.layout')

@section('title', 'Login')

@section('content')
<header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="{{ url('/') }}">login</a></div>
                <ul>
                </ul>
         </div>
    </nav>
    </header>

    
    <main>
        @yield('content')
        <main>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</main>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My WebDev Portfolio. All Rights Reserved.</p>
    </footer>
</body>
</html>
@endsection
