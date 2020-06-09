<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="icon"
            href="{{ asset('image/fav.png') }}"
            type="image/gif"
            sizes="16x16"
        />

        <title>AHMEDABAD GREETINGS</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Bitter&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
        <style>
            html,
            body {
                background-color: black;
                color: #ffffff;
                font-family: "Nunito", sans-serif;
                font-weight: 200;
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
                font-size: 84px;
                font-family: "Bitter", serif;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: 0.1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: "Shadows Into Light", cursive;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="container"></div>
        <div class="box" id="box"></div>
        <div class="words display-1 p-5 position-relative d-none"></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif @endauth
            </div>
            @endif

            <div class="content">
                <p></p>
                <div class="title m-b-md">
                    Ahmedabad Greetings
                </div>

                <div class="links">
                    <a href="#">About us</a>
                    <a href="{{ url('/profile') }}">Profile</a>
                    <a href="{{ url('/Package') }}">Party packs</a>
                    <a
                        href="https://github.com/suraj00000/AHMEDABAD_GREETINGS"
                        target="_blank"
                        >GitHub</a
                    >
                </div>
            </div>
        </div>
        <script src="{{ asset('js/home.js') }}"></script>
    </body>
</html>
