@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Productos</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('producto.create')}}" class="btn btn-success">Agregar Productos</a>
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
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Descripcion del Producto</th>
                    <th scope="col">Stock del Producto</th>
                    <th scope="col">ID Proveedor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$producto->nom_producto}}</td>
                        <td>{{$producto->desc_producto}}</td>
                        <td>{{$producto->stock}}</td>
                        <td>{{$producto->id_proveedor}}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('producto.edit', $producto->id_producto) }}">Editar</a>
                            <form action="{{ route('producto.destroy', $producto->id_producto) }}" method="POST" style="display:inline;">
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
