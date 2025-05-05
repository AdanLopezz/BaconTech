@extends('layouts.side')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Editar Metodo de Pago</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('metodoPago.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('metodoPago.update',$metodoPago->id_metodo_pago) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="nombre" class="form-label">Metodo de pago</label>

                    <input type="text" class="form-control" id="nombre" name="descripcion" aria-describedby="emailHelp" value="{{$metodoPago->descripcion}}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
