@extends('layouts.nav')
@section('content')

    <body style="background-color: #f8f9fa;">

    <div class="container my-5">
        <h2 class="mb-4 text-center text-dark fw-bold">Productos - Empresa BaconTech</h2>

        <!-- Fila de productos -->
        <div class="row g-4 justify-content-center">

            
            <div class="col-md-4">
                <div class="card product-card shadow-lg" style="background-color: #ffffff;">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Producto A</h5>
                        <p class="card-text">Descripción breve del producto A. Ideal para todo tipo de proyectos.</p>
                        <p class="text-dark"><strong>Precio:</strong> $1,000.00 MXN</p>
                        <a href="#" class="btn btn-info w-100">Ver más</a>
                    </div>
                </div>
            </div>


    </div>

    <!-- Incluir JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

@endsection
