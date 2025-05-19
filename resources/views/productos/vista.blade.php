@extends('layouts.landing')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div>
                <a href="{{route('landing.index')}}" class="btn btn-primary mb-4">Regresar</a>
            </div>

            <div class="col-md-6">
                <img src="{{ asset('storage/' . $producto->img_producto) }}" class="img-fluid" alt="{{ $producto->nom_producto }}">
            </div>
            <div class="col-md-6">
                <h1>{{ $producto->nom_producto }}</h1>
                <p>{{ $producto->desc_producto }}</p>
                <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
                    <button type="submit" class="btn btn-success">Añadir al carrito</button>

            </div>
        </div>
    </div>
@endsection
