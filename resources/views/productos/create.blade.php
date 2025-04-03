@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nuevo Producto</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('producto.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('producto.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom_producto" class="nom_producto">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nom_producto" name="nom_producto" aria-describedby="emailHelp" >

                    <label for="desc_producto" class="desc_producto">Descripción del Producto</label>
                    <input type="text" class="form-control" id="desc_producto" name="desc_producto" aria-describedby="emailHelp">

                    <label for="stock" class="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" aria-describedby="emailHelp">

                    <label for="id_proveedor" class="id_proveedor">ID Proveedor</label>
                    <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
