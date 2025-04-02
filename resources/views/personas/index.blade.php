@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Personas</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('persona.create')}}" class="btn btn-success">Agregar Personas</a>
        </div>
    </div>


    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-4">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Id Direccion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$persona->nombre}}</td>
                        <td>{{$persona->apellido_paterno}}</td>
                        <td>{{$persona->apellido_materno}}</td>
                        <td>{{$persona->correo}}</td>
                        <td>{{$persona->telefono}}</td>
                        <td>{{$persona->id_direccion}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('persona.edit', $persona->id_persona) }}">Editar</a>
                            <form action="{{ route('persona.destroy', $persona->id_persona) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
