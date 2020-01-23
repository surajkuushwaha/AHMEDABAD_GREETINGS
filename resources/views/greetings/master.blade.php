<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="{{ asset('css/style.css') }}"
            type="text/css"
        />
        <title>@yield('title')</title>
    </head>

    <body>
        @section('header')
        <nav>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/Contact">Contact</a></li>
                <li><a href="/Projects">Projects</a></li>
            </ul>
        </nav>

        <!-- <section class="landing">
            <img src="{{ asset('svg/circles.svg') }}" alt="dots" />
            <h1>Dots</h1>
        </section> -->

        <script src="{{ asset('js/app1.js') }}"></script>
        @show
        <div class="center">
            @yield('content')
        </div>
        @section('footer')
        <div class="footer">
            <h1>hello12345</h1>
        </div>
        @endsection
    </body>
</html>
