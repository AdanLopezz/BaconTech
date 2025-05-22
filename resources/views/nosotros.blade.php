@extends('layouts.landing')

@section('content')

    <header class="hero bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4">Sobre Nosotros</h1>
            <p class="lead">Conectamos innovación con soluciones reales</p>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container">
            <h2>Nuestra Historia</h2>
            <p>
                En <strong>BaconTech</strong>, comenzamos nuestro viaje en 2010 con una visión clara:
                brindar tecnología de calidad al alcance de todos. Desde entonces, hemos crecido junto
                a nuestros clientes, aprendiendo de cada desafío y celebrando cada logro.
            </p>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Misión</h3>
                    <p>
                        Ofrecer productos y servicios tecnológicos innovadores que mejoren la vida de las personas y potencien los negocios.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>Visión</h3>
                    <p>
                        Ser una empresa líder en tecnología a nivel nacional, reconocida por su calidad, compromiso y orientación al cliente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white text-center">
        <div class="container">
            <h2>Conoce a nuestro equipo</h2>
            <p class="mb-5">Personas apasionadas por la tecnología y el servicio.</p>

            <div class="row">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Equipo 1">
                    <h5>José Arturo Carbajal Peñaloza</h5>
                    <p>CEO & Fundadora</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Equipo 2">
                    <h5>Adan Lopez Bautista</h5>
                    <p>Director Técnico</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Equipo 3">
                    <h5>Luis Javier Chavez</h5>
                    <p>Marketing y Ventas</p>
                </div>
            </div>
        </div>
    </section>

@endsection
