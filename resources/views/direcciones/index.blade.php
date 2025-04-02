@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Direcciones</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('direccion.create')}}" class="btn btn-success">Agregar Direcciones</a>
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
                    <th scope="col">Calle</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Codigo Postal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($direcciones as $direccion)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$direccion->calle}}</td>
                        <td>{{$direccion->estado}}</td>
                        <td>{{$direccion->codigo_postal}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('direccion.edit', $direccion->id_direccion) }}">Editar</a>
                            <form action="{{ route('direccion.destroy', $direccion->id_direccion) }}" method="POST" style="display:inline;">
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
