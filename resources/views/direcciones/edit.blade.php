@extends('layouts.side')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Editar Direccion</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('direccion.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>




    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('direccion.update',$direccion->id_direccion) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="calle" class="calle">Calle</label>
                    <input type="text" class="form-control" id="calle" name="calle" aria-describedby="emailHelp"  value="{{$direccion->calle}}">

                    <label for="estado" class="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" aria-describedby="emailHelp" value="{{$direccion->estado}}">

                    <label for="codigo_postal" class="codigo_postal">Codigo Postal</label>
                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" aria-describedby="emailHelp" value="{{$direccion->codigo_postal}}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
