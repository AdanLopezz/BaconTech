@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nueva Direccion</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('direccion.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('direccion.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="calle" class="calle">Calle</label>
                    <input type="text" class="form-control" id="calle" name="calle" aria-describedby="emailHelp" >

                    <label for="estado" class="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" aria-describedby="emailHelp">

                    <label for="codigo_postal" class="codigo_postal">Codigo Postal</label>
                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
