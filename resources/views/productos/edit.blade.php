@extends('layouts.side')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Editar Producto</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{ route('producto.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('producto.update', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nom_producto" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nom_producto" name="nom_producto" value="{{ old('nom_producto', $producto->nom_producto) }}" required>

                    <label for="desc_producto" class="form-label">Descripción del Producto</label>
                    <input type="text" class="form-control" id="desc_producto" name="desc_producto" value="{{ old('desc_producto', $producto->desc_producto) }}" required>

                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" required>

                    <label for="stock" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $producto->precio) }}" required>

                    <label for="id_proveedor" class="form-label">ID Proveedor</label>
                    <input type="number" class="form-control" id="id_proveedor" name="id_proveedor" value="{{ old('id_proveedor', $producto->id_proveedor) }}" required>

                    <label for="img_producto" class="form-label">Imagen del Producto</label>
                    <input type="file" class="form-control" id="img_producto" name="img_producto" accept="image/*">

                    @if($producto->img_producto)
                        <div class="mt-2">
                            <p>Imagen Actual:</p>
                            <img src="{{ asset('storage/' . $producto->img_producto) }}" alt="Imagen del producto" width="100" height="100">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
