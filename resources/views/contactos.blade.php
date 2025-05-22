@extends('layouts.nav')
@section('content')

    <body style="background-color: #f8f9fa; height: 100%; display: flex; flex-direction: column;">

    <div class="container my-5" style="flex: 1;">
        <h2 class="mb-4 text-center text-dark fw-bold">Contactos - Empresa BaconTech</h2>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100 shadow-lg" style="background-color: #2c3e50; color: #ecf0f1;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-white">Arturo Carbajal Peñaloza</h5>
                        <h6 class="card-subtitle mb-3 text-light">Ventas</h6>
                        <p class="mb-1"><strong>Correo:</strong> puercos@bacontech.com</p>
                        <p class="mb-1"><strong>Teléfono:</strong> +52 55 1234 5678</p>
                        <p class="card-text"><strong>Mensaje:</strong> Solicito información sobre componentes para PC.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-lg" style="background-color: #2c3e50; color: #ecf0f1;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-white">Adán López Bautista</h5>
                        <h6 class="card-subtitle mb-3 text-light">Soporte Técnico</h6>
                        <p class="mb-1"><strong>Correo:</strong> cerdos@bacontech.com</p>
                        <p class="mb-1"><strong>Teléfono:</strong> +52 33 8765 4321</p>
                        <p class="card-text"><strong>Mensaje:</strong> Reporte de falla en producto recibido.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-lg" style="background-color: #2c3e50; color: #ecf0f1;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-white">Luis Javier Chávez Buenrrostro</h5>
                        <h6 class="card-subtitle mb-3 text-light">Atención a Clientes</h6>
                        <p class="mb-1"><strong>Correo:</strong> porsinos@bacontech.com</p>
                        <p class="mb-1"><strong>Teléfono:</strong> +52 81 2345 6789</p>
                        <p class="card-text"><strong>Mensaje:</strong> Consulta sobre estado de pedido.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>

@endsection
