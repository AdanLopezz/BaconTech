@extends('layouts.nav')
@section('content')





    <header class="fondo pb-5 pt-0 d-flex flex-column justify-content-center">
        <div class="container text-white text-center">
            <h1>Encuentra los mejores componentes para la pc de tus sueños</h1>
            <p class="lead">Calidad y precios accesibles</p>
            <a href="nosotros" class="btn btn-light btn-lg">Sobre nosotros</a>
        </div>
    </header>


    <div class="cont">
        <div class="row m-2">
            <a href="contactos" class="col-4 d-flex justify-content-center">
                <img  class="w-auto" src="img/publicidad1.png" alt="...">
            </a>



            <div class="col-8">
                <div id="carouselExampleCaptions" class="carousel slide container d-flex justify-content-center">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Carusel1.jpg" class="w-100 d-block  mx-auto" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carusel2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Carusel3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>




    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Productos</h2>

            <div class="row py-4">
                @foreach($productos as $producto)
                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <img src="{{asset('storage/' . $producto->img_producto) }}" class="card-img-top" alt="Producto">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{$producto->nom_producto}}</h5>
                                <p class="card-text">{{$producto->desc_producto}}</p>
                                <p class="card-text">$ {{$producto->precio}}</p>
                                <a href="{{ route('producto.show', $producto->id_producto) }}" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>




@endsection
