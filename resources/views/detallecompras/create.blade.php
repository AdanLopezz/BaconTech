@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nueva Detalle de Compra</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('detallecompra.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('detallecompra.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_compra" class="id_compra">ID Compra</label>
                    <input type="text" class="form-control" id="id_compra" name="id_compra" aria-describedby="emailHelp" >

                    <label for="id_producto" class="id_producto">ID Producto</label>
                    <input type="text" class="form-control" id="id_producto" name="id_producto" aria-describedby="emailHelp">

                    <label for="cantidad" class="cantidad">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" aria-describedby="emailHelp">

                    <label for="subtotal" class="subtotal">Subtotal</label>
                    <input type="text" class="form-control" id="subtotal" name="subtotal" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
