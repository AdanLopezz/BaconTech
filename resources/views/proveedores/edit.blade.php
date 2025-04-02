@extends('layouts.side')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Editar Proveedor</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('proveedor.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('proveedor.update',$proveedor->id_proveedor) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="id_persona" class="id_persona">Id_persona</label>
                    <input type="text" class="form-control" id="id_persona" name="id_persona" aria-describedby="emailHelp"  value="{{$proveedor->id_persona}}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection

