<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link
            rel="stylesheet"
            href="{{ asset('css/style.css') }}"
            type="text/css"
        />
        @yield('css')
        <title>@yield('title')</title>
    </head>

    <body>
        @section('header')
        <nav>
            <a href="#">
                <img class="logo" src="{{ asset('image/logo.png') }}"/>
            </a>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
        </nav>
        <script src="{{ asset('js/app1.js') }}"></script>
        @show
        @yield('content')
        
        @section('footer')
        <div class="footer">
            <h1>Footer side</h1>
        </div>
        @show
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>