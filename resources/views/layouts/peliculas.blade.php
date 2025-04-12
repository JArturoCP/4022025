<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <main class="container-fluid bg-light">
        <div class="row min-vh-100">
            <div class="col-2 d-flex flex-column align-items-center bg-dark text-white p-3">
                <a href="{{ route('home') }}" class="d-flex justify-content-center text-decoration-none text-dark">
                    <img src="{{ asset('img/perfil.png') }}" class="rounded-circle w-50 mb-3" alt="logo">

                    <h4 class="fw-bold text-center"></h4>
                </a>
                <ul class="nav flex-column w-100 mt-3">
                    <li class="nav-item py-2 {{ Request::is('dashPeliculas') ? 'bg-primary rounded' : '' }}"><a href="{{ asset('dashPeliculas') }}" class="text-decoration-none fw-bold text-white  align-items-center gap-4 d-flex"><i class="fa-solid fa-film ms-4"></i>Peliculas</a></li>
                    <li class="nav-item py-2 {{ Request::is('clasificacion*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('clasificacion.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-clapperboard ms-4"></i>Clasificacion</a></li>
                    <li class="nav-item py-2 {{ Request::is('genero*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('generos.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-users ms-4"></i> Generos</a></li>
                    <li class="nav-item py-2 {{ Request::is('idioma*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('idioma.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-language ms-4"></i> Idiomas</a></li>
                    <li class="nav-item py-2 {{ Request::is('director*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('director.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-cloud ms-4"></i>Directores</a></li>
                    <li class="nav-item py-2 {{ Request::is('personas*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('personas.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-user-plus ms-4"></i> Personas</a></li>
                    <li class="nav-item py-2 {{ Request::is('protagonistas*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('protagonistas.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-user ms-4"></i> Protagonistas</a></li>
                </ul>

                <div class="mt-auto">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn w-100 text-white">
                            <i class="fa-solid fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>

            </div>

            <div class="col pt-4">
                @yield('content')
            </div>

        </div>
    </main>
</body>

</html>