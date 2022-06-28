<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

        .menu-horizontal{
            list-style: none;
            display: flex;
            justify-content: space-around;
        }

        .menu-horizontal > li > a{
            display: block;
            padding:15px 20px;
            color: white;
            text-decoration: none;
        }

        .menu-horizontal > li:hover{
            background-color: #15327f;
            border-radius: 10%
        }
        .menu-vertical{
            position: absolute;
            display: none;
            list-style: none;
            width:  200px;
            background-color: #15327f;
            border-radius: 10%
        }
        .menu-horizontal li:hover .menu-vertical{
            display: block;
        }

        .menu-vertical > li:hover{
            background-color: #153260;
            border-radius: 10%

        }

        .menu-vertical > li > a{
            /* padding:1px 10px 5px 1px; */
            color: white;
            text-decoration: none;
        }
        #logo{
            width: 30px;
            height: 30px;
            border-radius: 100%

        }
    </style>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <div id="app">
        <nav class=" navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #15326A">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="desplegable">
                    <ul class="menu-horizontal">
                        <li>
                            <a class="navbar-brand text-light" href="{{ url('/') }}">
                                <img id='logo' src="https://img.freepik.com/vector-gratis/diente-dibujos-animados-dando-pulgar_29190-372.jpg" alt= "">
                                {{ __('Dental App') }}
                            </a>
                        </li>
                        <li>
                            <a class="navbar-brand text-light" href="#"><i class="bi bi-card-list"></i>{{ __(' Lista de Precios') }}</a>
                            <ul class='menu-vertical'>
                                <li><a class="nav-item text-light" href="{{ route('precios.tabla') }}">{{ __('Ver') }}</a></li>
                                @if (Auth::check())
                                <li><a class="nav-item text-light" href="{{ route('productos.index') }}">{{ __('Modificar') }}</a></li>
                                @endif
                            </ul>
                        </li>
                        @if (Auth::check())
                        <li>
                            <a class="navbar-brand text-light" href="#"><i class="bi bi-file-word"></i>{{ __(' Trabajos') }}</a>
                        </li>
                        @endif
                        <li>
                            <a class="navbar-brand text-light" href="#"><i class="bi bi-calendar2-date-fill"></i>{{ __(' Citas') }}</a>
                            <ul class='menu-vertical'>
                                @if (Auth::check())
                                <li><a class="nav-item text-light" href="{{ route('productos.index') }}">{{ __('Ver citas') }}</a></li>
                                @endif
                                <li><a class="nav-item text-light" href="{{ route('agendar.nueva') }}">{{ __('Agendar') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="navbar-brand text-light" href="#"><i class="bi bi-info-circle-fill"></i>{{ __(' Ayuda') }}</a>
                        </li>
                    </ul>
                    </div>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ms-auto">
                        {{-- @endif --}}
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-light" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
