@if(Auth::check())
    <ul class="app-nav">
        <a href="/"><li class="btn-standard">Home</li></a>
        <a href="#"><li class="btn-standard">Concerts</li></a>
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