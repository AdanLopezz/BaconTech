@extends('layouts.side')
@section('content')
    <div class="container-fluid bg-black">
        <div class="row min-vh-100 rounded-4">
            <!-- Contenido Principal -->
            <div class="col-7 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold">Bienvenido BaconTech</h3>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card text-white bg-azu-cp p-3">
                            <h5 class="fw-bold" >Clientes</h5>
                            <h2>{{$totalClientes}}</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-azu-cp p-3">
                            <h5 class="fw-bold" >Proveedores</h5>
                            <h2>{{$totalProveedores}}</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-azu-cp p-3">
                            <h5 class="fw-bold" >Compras Realizadas</h5>
                            <h2>{{$comprastotal}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card p-3 bg-gris-transparentoso">
                            <h5 class="fw-bold" >Productos</h5>
                            <ul>
                                @foreach($productos as $producto)
                                    <li>{{$producto ->nom_producto}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 bg-gris-transparentoso">
                            <h5 class="fw-bold" >Metodos de pago disponibles</h5>
                            <ul>
                                @foreach($metodoPagos as $metodoPago)
                                    <li>{{$metodoPago -> descripcion}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tabla de últimos movimientos -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card p-3 bg-gris-transparentoso">
                            <h5 class="fw-bold" >Personas</h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($personas as $persona)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$persona->nombre}}</td>
                                        <td>{{$persona->correo}}</td>
                                        <td>{{$persona->telefono}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercera Columna -->
            <div class="col p-4 bg-light">
                <div class="card p-3 text-center bg-gris-claro">
                    <h5 class="fw-bold" >Uso de almacenamiento</h5>
                    <div class="progress">
                        <div class="progress-bar bg-azul-claro" style="width: 50%">50%</div>
                    </div>
                    <p>50GB / 100GB</p>
                </div>

                <div class="card p-3 mt-4 bg-gris-claro">
                    <h5 class="fw-bold" >Notificaciones</h5>
                    <ul>
                        <li>Actualización del sistema disponible</li>
                        <li>Se detectó un nuevo inicio de sesión</li>
                        <li>Se programó un mantenimiento del servidor</li>
                    </ul>
                </div>

                <div class="card p-3 mt-4 bg-gris-claro">
                    <h5 class="fw-bold" >Miembros del equipo</h5>
                    <ul>
                        <li>Arturo Carbajal - Admin</li>
                        <li>Javier Chávez - Developer</li>
                        <li>Ádan López - Support</li>
                    </ul>
                </div>

                <div class="card p-3 mt-4 text-center bg-gris-claro">
                    <h5 class="fw-bold" >Acciones rapidas</h5>
                    <button class="btn btn-azul w-100 my-2">Añadir usuarios</button>
                    <button class="btn btn-secondary w-100 my-2">Generar reportes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
