@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nuevas Compras</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('compra.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('compra.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_cliente" class="id_cliente">Id_Cliente</label>
                    <input type="text" class="form-control" id="id_cliente" name="id_cliente" aria-describedby="emailHelp" >

                    <label for="fecha" class="fecha">Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" aria-describedby="emailHelp">

                    <label for="total_compra" class="total_compra">Total Compra</label>
                    <input type="text" class="form-control" id="total_compra" name="total_compra" aria-describedby="emailHelp">

                    <label for="id_metodo_pago" class="id_metodo_pago">Id Metodo de Pago</label>
                    <input type="text" class="form-control" id="id_metodo_pago" name="id_metodo_pago" aria-describedby="emailHelp">

                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
