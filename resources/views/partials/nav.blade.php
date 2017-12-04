@if(Auth::check())
    <ul class="app-nav text-up">
        <a href="/"><li class="btn-standard">Home</li></a>
        <a href="{{route('concerts.index')}}"><li class="btn-standard">Concert Index</li></a>
        <a href="{{route('concerts.index-by-band')}}"><li class="btn-standard">Concerts By Individual Band</li></a>
        <a href="{{route('concerts.create')}}"><li class="btn-standard">Add A Concert</li></a>
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