@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Proveedores</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('proveedor.create')}}" class="btn btn-success">Agregar Proveedores</a>
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apeliido materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->apellido_paterno}}</td>
                        <td>{{$proveedor->apellido_materno}}</td>
                        <td>{{$proveedor->correo}}</td>
                        <td>{{$proveedor->telefono}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('proveedor.edit', $proveedor->id_proveedor) }}">Editar</a>
                            <form action="{{ route('proveedor.destroy', $proveedor->id_proveedor) }}" method="POST" style="display:inline;">
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
