<html>
<head>
    @include('partials.head')<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
    <body>
        @include('partials.header')
            <div class="main-container">
                <div id="ssl-content" class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="footer-container">
            @include('partials.footer')
        </div>
    </body>
</html>