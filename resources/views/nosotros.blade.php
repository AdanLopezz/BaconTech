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
                    <p>Fundada en 2025 por un grupo de sexis soñadores digitales, la BaconTech nació con una sola misión: romper los límites entre lo humano y lo tecnológico BaconTech es el fruto de la pasión y la amistad entre tres estudiantes de ingeniería en sistemas computacionales que compartían más que solo su gusto por la tecnología: los tres enfrentaban juntos un desafío personal común, el sobrepeso, que los unió aún más en su camino académico y profesional.

                        Durante sus años en la universidad, estos tres jóvenes se dieron cuenta de lo difícil que era para muchos usuarios encontrar componentes de computadora confiables, accesibles y con asesoría cercana, especialmente para quienes, como ellos, estaban empezando en el mundo del hardware y la tecnología. Motivados por esta necesidad y con un fuerte sentido de camaradería, decidieron unir fuerzas para crear una empresa que no solo vendiera componentes, sino que ofreciera un espacio donde todos se sintieran incluidos, valorados y bien atendidos, sin importar su condición o experiencia técnica.

                        Así nació BaconTech, un proyecto que comenzó en un pequeño grupo de tres personas con obesidad y muchas ideas. El nombre "BaconTech" surgió como un guiño a su afición común por la comida reconfortante, especialmente el tocino ("bacon"), un símbolo de su unión y espíritu alegre ante los retos que enfrentaban en su vida diaria..</p>
                    <p>Hoy, nos encargamos de la venta de componentes para computadora para aquellas personas que estan interesadas en productos de marca y de la mas alta calidad.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img  class="w-auto" src="img/logobacon.png" alt="...">
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
                    <p>Nos movemos más allá del presente, administrando componentes para los desafíos del mañana.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="text-primary">Humanidad</h4>
                    <p>Cada componente que vendemos tienen un proposito: mejorar vidas.</p>
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
                    <div class="row"><img  class="" src="img/dodoreal.jpg" alt="..."></div>
                    <h5>Arturo Carbajal Peñaloza</h5>
                    <p class="text-light">CEO & Fundador</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="row"><img  class="" src="img/poporeal.png" alt="..."></div>
                    <h5>Adán López Bautista</h5>
                    <p class="text-light">CTO & Arquitecto de software</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="row"><img  class="" src="img/manjireal.jpg" alt="..."></div>
                    <h5>Luis Javier Chávez Buenrrostro</h5>
                    <p class="text-light">Líder de Experiencia de Usuario</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-center text-white">
        <div class="container">
            <h2 class="fw-bold mb-3">¿Listo para armar una nueva computadora?</h2>
            <p class="lead mb-4">Trabajemos juntos para diseñar soluciones que cambien el juego.</p>
            <a href="/contactos" class="btn btn-light fw-bold px-4 py-2">Contáctanos</a>
        </div>
    </section>

    </body>
@endsection
