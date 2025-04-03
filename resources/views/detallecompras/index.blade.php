@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Detalles de compras</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('detallecompra.create')}}" class="btn btn-success">Agregar Detalle de Compra</a>
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
                    <th scope="col">ID Compra</th>
                    <th scope="col">ID Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($detallecompras as $detallecompra)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$detallecompra->id_compra}}</td>
                        <td>{{$detallecompra->id_producto}}</td>
                        <td>{{$detallecompra->cantidad}}</td>
                        <td>{{$detallecompra->subtotal}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('detallecompra.edit', $detallecompra->id_detalle) }}">Editar</a>
                            <form action="{{ route('detallecompra.destroy', $detallecompra->id_detalle) }}" method="POST" style="display:inline;">
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
