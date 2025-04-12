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
            <img src="{{ asset('img/perfil.png') }}" class="rounded-circle w-50 mb-3" alt="logo">

            <h4 class="fw-bold text-center">Asignaciones</h4>

            <ul class="nav flex-column w-100 mt-3">
                <li class="nav-item py-2 {{ Request::is('asigna_cartelera*') ? 'bg-primary rounded' : '' }}">
                    <a href="{{ route('asigna_cartelera.index') }}" class="text-decoration-none fw-bold text-white d-flex align-items-center gap-4">
                        <i class="fa-solid fa-ticket ms-4"></i> Asigna Cartelera
                    </a>
                </li>
                <li class="nav-item py-2 {{ Request::is('horas*') ? 'bg-primary rounded' : '' }}">
                    <a href="{{ route('horas.index') }}" class="text-decoration-none fw-bold text-white d-flex align-items-center gap-4">
                        <i class="fa-solid fa-clock ms-4"></i> Horas
                    </a>
                </li>
                <li class="nav-item py-2 {{ Request::is('proyecciones*') ? 'bg-primary rounded' : '' }}">
                    <a href="{{ route('proyecciones.index') }}" class="text-decoration-none fw-bold text-white d-flex align-items-center gap-4">
                        <i class="fa-solid fa-video ms-4"></i> Proyecciones
                    </a>
                </li>
                <li class="nav-item py-2 {{ Request::is('dias*') ? 'bg-primary rounded' : '' }}">
                    <a href="{{ route('dias.index') }}" class="text-decoration-none fw-bold text-white d-flex align-items-center gap-4">
                        <i class="fa-solid fa-calendar-day ms-4"></i> Días
                    </a>
                </li>
                <li class="nav-item py-2 {{ Request::is('cines*') ? 'bg-primary rounded' : '' }}">
                    <a href="{{ route('cine.index') }}" class="text-decoration-none fw-bold text-white d-flex align-items-center gap-4">
                        <i class="fa-solid fa-building ms-4"></i> Cines
                    </a>
                </li>
                <li class="nav-item py-2 {{ Request::is('peliculas*') ? 'bg-primary rounded' : '' }}">
                    <a href="{{ route('peliculasViews.dashPeliculas') }}" class="text-decoration-none fw-bold text-white d-flex align-items-center gap-4">
                        <i class="fa-solid fa-film ms-4"></i> Películas
                    </a>
                </li>
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
