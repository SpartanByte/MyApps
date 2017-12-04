<html>
<head>
    @include('partials.head')
</head>
    <body>
        <div class="concert-app-container">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif
                @include('partials.nav')
                @yield('content')
            </div>
        <div class="footer-container">
            @include('partials.footer')
        </div>
    </body>
</html>