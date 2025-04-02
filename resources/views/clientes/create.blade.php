@extends('layouts.side')

@section('content')


    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Agregar Nuevos Clientes</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('cliente.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('cliente.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_persona" class="id_persona">Id Persona</label>
                    <input type="text" class="form-control" id="id_persona" name="id_persona" aria-describedby="emailHelp" >
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
