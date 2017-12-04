@if(Auth::check())
    <ul class="app-nav text-up">
        <a href="/"><li class="btn-standard">My Apps Home</li></a>
        <a href="{{route('movies.index')}}"><li class="btn-standard">Movie Index</li></a>
        <a href="{{route('movies.create')}}"><li class="btn-standard">Add A Movie</li></a>
        <a href="#"><li class="btn-standard">Movie Wishlist</li></a>
        <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     <li class="btn-standard">
                Logout
        </li></a>
    </ul>
    @else
        <ul class="not-logged-in">
            <li><a class="btn-standard btn-green" href="/login">Login</a></li>
            <li><a class="btn-standard btn-green" href="/register">Register</a></li>
        </ul>
@endif