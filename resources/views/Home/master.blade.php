<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            rel="icon"
            href="{{ asset('image/fav.png') }}"
            type="image/gif"
            sizes="16x16"
        />
        <link
            rel="stylesheet"
            href="{{ asset('css/bootstrap/bootstrap.css') }}"
        />

        <style>
            #myform {
                text-align: center;
                padding: 5px;
                border: 1px dotted #ccc;
                margin: 2%;
            }
            .qty {
                width: 40px;
                height: 25px;
                text-align: center;
            }
            input.qtyplus {
                width: 25px;
                height: 25px;
            }
            input.qtyminus {
                width: 25px;
                height: 25px;
            }
        </style>
        @yield('js') @yield('css')

        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <a class="navbar-brand" href="#">
                <img
                    src="{{ asset('image/logo.png') }}"
                    width="200"
                    height="40"
                    alt=""
            /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/admin') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/user') }}" class="nav-link"
                            >User</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manager</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/product') }}" class="nav-link"
                            >Products</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Party Plots</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/Address') }}" class="nav-link"
                            >Address</a
                        >
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login')) @auth
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"
                            >Login</a
                        >
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"
                            >Register</a
                        >
                    </li>
                    @endif @endauth @endif
                </ul>
            </div>
        </nav>
        @show @yield('content') @section('footer')
        <!-- Footer -->
        <footer style="background-color: #23262e">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 text-center text-md-left ">
                        <div class="py-0">
                            <h3 class="my-4 text-white">
                                About<span
                                    class="mx-2 font-italic text-warning "
                                    >Ahmedabad Greetings</span
                                >
                            </h3>

                            <p class="footer-links font-weight-bold">
                                <a class="text-white" href="{{ url('/') }}"
                                    >Home</a
                                >
                                |
                                <a class="text-white" href="#">Blog</a>
                                |
                                <a class="text-white" href="#">About</a>
                                |
                                <a
                                    class="text-white"
                                    target="_blank"
                                    href="https://github.com/suraj00000/AHMEDABAD_GREETINGS"
                                    >Github</a
                                >
                            </p>
                            <p class="text-light py-4 mb-4">
                                &copy;2019 Ahmedabad Greetings Ltd.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 text-white text-center text-md-left ">
                        <div class="py-2 my-4">
                            <div>
                                <p class="text-white">
                                    <i class="fa fa-map-marker mx-2 "
                                        >Opp Civil, Near Gujarat High Court,
                                        S.G.Highway, Sola, Ahmedabad, Gujarat
                                        380060</i
                                    >
                                </p>
                            </div>

                            <div>
                                <p>
                                    <i class="fa fa-phone  mx-2 "></i> +91
                                    91067XXXXX
                                </p>
                            </div>
                            <div>
                                <p>
                                    <i class="fa fa-envelope  mx-2"></i
                                    ><a href="mailto:skk74143@gmail.com"
                                        >skk74143@gmail.com</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-4 text-white my-4 text-center text-md-left "
                    >
                        <span class=" font-weight-bold "
                            >About
                            <a href="http://surajkushwaha.live/"
                                >surajkushwaha.live</a
                            ></span
                        >
                        <p class="text-warning my-2">
                            Event management is the application of the
                            management practice of project management to the
                            creation and development of festivals, events, and
                            conferences.
                        </p>
                        <div class="py-2">
                            <a href="#"
                                ><i
                                    class="fab fa-facebook fa-2x text-primary mx-3"
                                ></i
                            ></a>
                            <a href="#"
                                ><i
                                    class="fab fa-google-plus fa-2x text-danger mx-3"
                                ></i
                            ></a>
                            <a href="#"
                                ><i
                                    class="fab fa-twitter fa-2x text-info mx-3"
                                ></i
                            ></a>
                            <a href="#"
                                ><i
                                    class="fab fa-youtube fa-2x text-danger mx-3"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        @show

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
