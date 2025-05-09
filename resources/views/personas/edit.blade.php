@extends('layouts.side')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Editar Personas</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('persona.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('persona.update',$persona->id_persona) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="nombre" class="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" value="{{$persona->nombre}}">

                    <label for="apellido_paterno" class="apellido_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" aria-describedby="emailHelp" value="{{$persona->apellido_paterno}}">

                    <label for="apellido_materno" class="apellido_materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" aria-describedby="emailHelp" value="{{$persona->apellido_materno}}">

                    <label for="correo" class="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" value="{{$persona->correo}}">

                    <label for="telefono" class="telefono">telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp" value="{{$persona->telefono}}">

                    <label for="id_direccion" class="id_direccion">id_direccion</label>
                    <input type="text" class="form-control" id="id_Direccion" name="id_direccion" aria-describedby="emailHelp" value="{{$persona->id_direccion}}">

                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
