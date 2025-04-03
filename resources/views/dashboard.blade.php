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
                            <h5 class="fw-bold" >Usuarios Activos</h5>
                            <h2>1,235</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-azu-cp p-3">
                            <h5 class="fw-bold" >Carga del servidor</h5>
                            <h2>72%</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-azu-cp p-3">
                            <h5 class="fw-bold" >Errores Detectados</h5>
                            <h2>15</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card p-3 bg-gris-transparentoso">
                            <h5 class="fw-bold" >Categorias mas visitadas</h5>
                            <ul>
                                <li>Graficas</li>
                                <li>Procesadores</li>
                                <li>Tarjetas madres</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 bg-gris-transparentoso">
                            <h5 class="fw-bold" >Ultimas compras</h5>
                            <ul>
                                <li>AMD Ryzen 7 7700X</li>
                                <li>NVIDIA GeForce RTX 4060 Ti</li>
                                <li>Tarjeta madre ASUS Pro Business</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tabla de últimos movimientos -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card p-3 bg-gris-transparentoso">
                            <h5 class="fw-bold" >Ultimos movimientos</h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuarios</th>
                                    <th>Acciones</th>
                                    <th>Fecha</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Compra realizada</td>
                                    <td>2025-03-05</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>Perfil actualizado</td>
                                    <td>2025-03-04</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mark Wilson</td>
                                    <td>Creacion de cuenta</td>
                                    <td>2025-03-03</td>
                                </tr>
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
