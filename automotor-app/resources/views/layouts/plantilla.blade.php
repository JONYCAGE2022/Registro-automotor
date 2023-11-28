<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrapp --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Iconos de bootstrap -->
    <link rel="stylesheet" href="vendor\twbs\bootstrap-icons\font\bootstrap-icons.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" alt="Logo">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Fuente de google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@500&family=Vina+Sans&display=swap"
        rel="stylesheet">
    <title>@yield('titulo')</title>
</head>

<body>
    {{-- Barra de navegación --}}
    <nav class="navbar navbar-expand-lg" style="background-color: #f3f4f6;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="navbar-brand" href="{{ route('Home') }}"><img src="{{ asset('img/logo.png') }}"
                            width="50" alt="Logo de la página web" class="img-fluid"></a>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('Home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ListaAutomotor') }}">Automotores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ListaTitular') }}">Titulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ListaInfraccion') }}">Infraciones</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex">
                    <li class="nav-item">
                        @if (Route::has('login'))
                            @auth
                                <a class="btn btn-outline-dark" href="{{ url('/dashboard') }}">
                                    Panel de administrador</a>
                            @else
                                <a class="btn btn-outline-dark" href="{{ route('login') }}">
                                    Ingresar</a>
                                @if (Route::has('register'))
                                    <a class="btn btn-dark" href="{{ route('register') }}">
                                        Registrarse</a>
                                @endif
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Sección Principal --}}
    <section class="Principal">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col">
                    @yield('contenido')
                </div>
            </div>
        </div>
    </section>
    {{-- Pie de página --}}
    <footer class="bg-dark text-white p-4 fixed-bottom">
        <div class="container-fluid text-center">
            Creado por Jonathan Chauque 2023 &copy
        </div>
    </footer>
    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
