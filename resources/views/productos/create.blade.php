@extends('layouts.side')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nuevo Producto</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{ route('producto.index') }}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nom_producto" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nom_producto" name="nom_producto" required>

                    <label for="desc_producto" class="form-label">Descripción del Producto</label>
                    <input type="text" class="form-control" id="desc_producto" name="desc_producto" required>

                    <label for="stock" class="form-label">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" required>

                    <label for="id_proveedor" class="form-label">ID Proveedor</label>
                    <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" required>

                    <label for="img_producto" class="form-label">Imagen del Producto</label>
                    <input type="file" class="form-control" id="img_producto" name="img_producto" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
