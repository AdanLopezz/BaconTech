@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nueva Persona</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('persona.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('persona.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" >

                    <label for="apellido_paterno" class="apellido_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" aria-describedby="emailHelp">

                    <label for="apellido_materno" class="apellido_materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" aria-describedby="emailHelp">

                    <label for="correo" class="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">

                    <label for="telefono" class="telefono">telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp">

                    <label for="id_direccion" class="id_direccion">Id_direccion</label>
                    <input type="text" class="form-control" id="id_direccion" name="id_direccion" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
