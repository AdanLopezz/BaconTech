<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .sidebar-item {
            transition: all 0.3s ease;
            position: relative;
        }
        .sidebar-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar-item.active {
            background-color: #0d6efd;
        }
        .sidebar-item.active::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: #fff;
        }
        .sidebar-link {
            transition: transform 0.2s;
        }
        .sidebar-item:hover .sidebar-link {
            transform: translateX(5px);
        }
        .sidebar-icon {
            min-width: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
<main class="container-fluid bg-light">
    <div class="row min-vh-100">

        <div class="col-2 d-flex flex-column align-items-center bg-dark text-white p-3">
            <img src="{{ asset('img/perfil.jpeg') }}" class="rounded-circle w-50 mb-3" alt="logo">

            <h4 class="fw-bold text-center">{{ Auth::user()->name ?? 'Usuario' }}</h4>

            <ul class="nav flex-column w-100 mt-3" id="mainSidebar">
                <li class="nav-item py-2 sidebar-item {{('dashboard') }}">
                    <a href="{{ route('dashboard') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-toolbox sidebar-icon ms-3"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{('metodoPago*') }}">
                    <a href="{{ route('metodoPago.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-credit-card sidebar-icon ms-3"></i>
                        <span class="ms-3">mtodoPagos</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('direccion*') }}">
                    <a href="{{ route('direccion.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-location-dot sidebar-icon ms-3"></i>
                        <span class="ms-3">Direccion</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('persona*') }}">
                    <a href="{{ route('persona.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-person sidebar-icon ms-3"></i>
                        <span class="ms-3">personas</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('cliente*') }}">
                    <a href="{{ route('cliente.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-regular fa-circle-user sidebar-icon ms-3"></i>
                        <span class="ms-3">clientes</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('proveedor*') }}">
                    <a href="{{ route('proveedor.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-truck sidebar-icon ms-3"></i>
                        <span class="ms-3">proveedores</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('compra*') }}">
                    <a href="{{ route('compra.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-cart-shopping sidebar-icon ms-3"></i>
                        <span class="ms-3">Compras</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('producto*') }}">
                    <a href="{{ route('producto.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-desktop sidebar-icon ms-3"></i>
                        <span class="ms-3">Productos</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{ ('detallecompra*') }}">
                    <a href="{{ route('detallecompra.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-cash-register sidebar-icon ms-3"></i>
                        <span class="ms-3">detallecompra</span>
                    </a>
                </li>

                <li class="nav-item py-2 sidebar-item {{('landing*') }}">
                    <a href="{{ route('landing.index') }}" class="text-decoration-none text-white d-flex align-items-center sidebar-link">
                        <i class="fa-solid fa-house sidebar-icon ms-3"></i>
                        <span class="ms-3">Landing</span>
                    </a>
                </li>
            </ul>

            <div class="mt-auto w-100">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn w-100 text-white d-flex align-items-center justify-content-start py-2 px-3 logout-btn">
                        <i class="fa-solid fa-sign-out-alt sidebar-icon ms-1"></i>
                        <span class="ms-3">Logout</span>
                    </button>
                </form>
            </div>
        </div>


        <div class="col pt-4 bg-light ps-0">
            @yield('content')
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const sidebarItems = document.querySelectorAll('#mainSidebar .sidebar-item');

    sidebarItems.forEach(item => {
        const link = item.querySelector('a');
        if (link.getAttribute('href') === currentPath) {
            item.classList.add('active');
        }
    });

    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    sidebarLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            if (!this.parentElement.classList.contains('active')) {
                this.style.transform = 'translateX(5px)';
            }
        });
        link.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});
</script>
</body>
</html>
