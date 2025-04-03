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
            <img src="{{asset('img/perfil.jpeg')}}" class="rounded-circle w-50 mb-3" alt="logo">

            <h4 class="fw-bold text-center"></h4>

            <ul class="nav flex-column w-100 mt-3">
                <li class="nav-item py-2 {{ Request::is('dashboard') ? 'bg-primary rounded' : '' }}"><a href="dashboard" class="text-decoration-none fw-bold text-white  align-items-center gap-4 d-flex"><i class="fa-solid fa-film ms-4"></i>Peliculas</a></li>
                <li class="nav-item py-2 {{ Request::is('metodoPago*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('metodoPago.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-clapperboard ms-4"></i>Metodo de Pago</a></li>
                <li class="nav-item py-2 {{ Request::is('direccion*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('direccion.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-users ms-4"></i> Direccion</a></li>
                <li class="nav-item py-2 {{ Request::is('persona*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('persona.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-language ms-4"></i>Personas</a></li>
                <li class="nav-item py-2 {{ Request::is('cliente*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('cliente.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-cloud ms-4"></i>Clientes</a></li>
                <li class="nav-item py-2 {{ Request::is('proveedor*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('proveedor.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-cloud ms-4"></i>Proveedores</a></li>
                <li class="nav-item py-2 {{ Request::is('compra*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('compra.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-cloud ms-4"></i>Compras</a></li>
                <li class="nav-item py-2 {{ Request::is('producto*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('producto.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-cloud ms-4"></i>Productos</a></li>
                <li class="nav-item py-2 {{ Request::is('detallecompra*') ? 'bg-primary rounded' : '' }}"><a href="{{ route('detallecompra.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex"><i class="fa-solid fa-cloud ms-4"></i>Detalle Compra</a></li>


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

        <div class="col pt-4 bg-light ps-0">
            @yield('content')
        </div>

    </div>
</main>
</body>
</html>
