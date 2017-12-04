<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Applications</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
            html, body {
                background-color: #363636;
                color:#b0b0b0;
                /*font-family: 'Raleway', sans-serif;*/
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 3.5rem;
                font-weight: 400;
                text-transform: uppercase;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 1.25rem;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
                color: #d7d7d7;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    My Applications
                </div>

                <div class="links">
                    <a href="{{route('concerts.index')}}">Concert App</a>
                    <a href="https://laracasts.com">Movies App</a>
                    <a href="https://laravel-news.com">Empty Slot</a>
                    <a href="https://forge.laravel.com">Empty Slot</a>
                </div>
            </div>
        </div>
    </body>
</html>
