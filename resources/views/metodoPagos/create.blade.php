@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nuevo Metodo de Pago</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('metodoPago.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('metodoPago.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="MetodoPago" class="MetodoPago">Metodo de pago</label>
                    <input type="text" class="form-control" id="MetodoPago" name="descripcion" aria-describedby="emailHelp"  value="{{ old('descripcion') }}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
