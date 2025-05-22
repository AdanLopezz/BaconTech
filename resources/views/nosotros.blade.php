@extends('layouts.nav')
@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Sobre Nosotros | NovaCore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light text-white">

    <!-- Hero principal -->
    <section class="py-5 text-center bg-gradient" style="background: linear-gradient(to right, #0f0c29, #302b63, #24243e);">
        <div class="container">
            <h1 class="text-primary fw-bold">Impulsamos el futuro con tecnología</h1>
            <p class="text-primary fw-bold">En Bacon Tech no solo creamos sistemas, creamos posibilidades. Creamos conexiones que transforman el mundo.</p>
        </div>
    </section>

    <!-- Historia -->
    <section class="py-5 bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Nuestra historia</h2>
                    <p>Fundada en 2018 por un grupo de soñadores digitales, NovaCore nació con una sola misión: romper los límites entre lo humano y lo tecnológico.</p>
                    <p>Hoy, ayudamos a empresas, startups y visionarios a materializar ideas que antes parecían ciencia ficción.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Historia NovaCore">
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="py-5 bg-light text-dark">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Nuestros valores</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 class="text-primary">Innovación</h4>
                    <p>Nos movemos más allá del presente, diseñando soluciones para los desafíos del mañana.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="text-primary">Humanidad</h4>
                    <p>Cada línea de código que escribimos tiene un propósito: mejorar vidas.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="text-primary">Transparencia</h4>
                    <p>Crecemos con la verdad, construimos con confianza y avanzamos con ética.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipo -->
    <section class="py-5 bg-dark">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Nuestro equipo</h2>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-2" alt="CEO">
                    <h5>Arturo Carbajal Peñaloza</h5>
                    <p class="text-light">CEO & Fundador</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src=img/Ejemplo.png" class="rounded-circle mb-2" alt="">
                    <h5>Adán López Bautista</h5>
                    <p class="text-light">CTO & Arquitecto de software</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-2" alt="UX">
                    <h5>Luis Javier Chávez Buenrrostro</h5>
                    <p class="text-light">Líder de Experiencia de Usuario</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-center text-white">
        <div class="container">
            <h2 class="fw-bold mb-3">¿Listo para crear el mañana?</h2>
            <p class="lead mb-4">Trabajemos juntos para diseñar soluciones que cambien el juego.</p>
            <a href="/contacto" class="btn btn-light fw-bold px-4 py-2">Contáctanos</a>
        </div>
    </section>

    </body>
@endsection
