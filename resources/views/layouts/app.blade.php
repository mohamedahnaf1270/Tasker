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
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="far fa-compass"></i>   Task Tracker
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('home')}}">
                                        Home
                                    </a>
                                        <a><hr class="dropdown-divider"></a>
                                    <a class="dropdown-item" href="{{route('project.index')}}">
                                    Projects
                                </a>
                                <a class="dropdown-item" href="{{route('user.index')}}">
                                    Users
                                </a>
                                <a><hr class="dropdown-divider"></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
@yield('sub_nave_projects')
@yield('sub_nave_users')
@yield('sub_nave')

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-dark container-fluid footer">
        <div class="container">
            <span><div><hr style="border-color: rgb(211, 211, 211);"><p class="m-2 ml-2" style="color: rgb(211, 211, 211);">Contact us</p></div></span>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" style="font-size: 20px; color: rgb(211, 211, 211);" class="btn btn-daw"><i class="fab fa-facebook-square"></i></button>
                <button type="button" style="font-size: 20px; color: rgb(211, 211, 211);" class="btn btn-awd"><i class="fab fa-snapchat-ghost"></i></button>
                <button type="button" style="font-size: 20px; color: rgb(211, 211, 211);" class="btn btn-awd"><i class="fab fa-instagram-square"></i></button>
                <button type="button" style="font-size: 20px; color: rgb(211, 211, 211);" class="btn btn-awd"><i class="fas fa-envelope"></i></button>
                <button type="button" style="font-size: 20px; color: rgb(211, 211, 211);" class="btn btn-awd"><i class="fas fa-phone-alt"></i></button>
                <button type="button" style="font-size: 20px; color: rgb(211, 211, 211);" class="btn btn-awd"><i class="fab fa-facebook-messenger"></i></button>
            </div>
            <span class="justify-content-end" style="color: rgb(211, 211, 211);">Designed and built with all the love in the world by the <a href="https://getbootstrap.com/docs/5.0/about/team/">Bootstrap</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</span>
            <span style="color: rgb(211, 211, 211);">Mohamed Ahnaf©.</span>
        </div>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
