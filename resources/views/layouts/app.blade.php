<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/65d4f292bd.js" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}
</head>
<body class="landing-page">
    <div id="app">
       <nav class="nav-bar-modify">
            @php
                $currentURL = URL::current();
            @endphp
            <div>
                <a class="navbar-brand" href="{{route('welcome')}}">
                    Halsey.Preloved
                </a>
            </div>
            <ul id="list-of-view" class="navbar-right-item list-of-view dnons">
                <li class="{{ (request()->is('/')) ? 'active-home-link' : 'navlink' }}">
                    <a class="nav-link color-text-theme" href="{{route('welcome')}}">{{ __('Home') }}</a>
                </li>
                <li class="{{ (request()->is('shop*')) ? 'active-home-link' : 'navlink' }}">
                    <a class="nav-link color-text-theme" href="{{route('shop')}}">{{ __('Shop') }}</a>
                </li>
                <li class="{{ (request()->is('contact*')) ? 'active-home-link' : 'navlink' }}">
                    <a class="nav-link" href="{{route('contact')}}">{{ __('Contact Us') }}</a>
                </li>
                <li class="signup">
                    <a class="nav-link" href="">{{ __('Sign In') }}</a>
                </li>
            </ul>
            <ul class="navbar-right-item burger-btn dnone">
                <li class="btn-burger"><i class="fa-solid fa-bars burgers" onclick="toggleBurger()"></i></li>
            </ul>
       </nav>
        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer-landingpage">
            <div class="header-footer">
                <div class="header-footer-data header-footer-title">
                    <h3>Halsey.Preloved</h3>
                </div>
                <div class="header-footer-data">
                    <p><a href="">New Arrivals</a> </p>
                    <p><a href="">For Mens</a> </p>
                    <p><a href="">For Womens</a> </p>
                    <p><a href="">For Kids</a> </p>
                </div>
                <div class="header-footer-data">
                    <p><a href="">Report Issue</a> </p>
                    <p><a href="">Bug Issue</a> </p>
                </div>
                <div class="header-footer-data">
                    <p><a href="">Home</a> </p>
                    <p><a href="">Shop</a> </p>
                    <p><a href="">Contact Us</a> </p>
                    <p><a href="">Sign In</a> </p>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="footer-footer">
                <div class="icon-soc">
                    <div><a href="" class="fb"><i class="fa-brands fa-facebook-f"></i></a></div>
                    <div><a href="" class="fbm"><i class="fa-brands fa-facebook-messenger"></i></a></div>
                    <div><a href="" class="inst"><i class="fa-brands fa-instagram"></i></a></div>
                    <div><a href="" class="twit"><i class="fa-brands fa-twitter"></i></a></div>
                    <div><a href="" class="tik"><i class="fa-brands fa-tiktok"></i></a></div>
                </div>
                <div class="copyright">
                    <p>&copy; Copyright 2022 Halsey.Preloved</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
