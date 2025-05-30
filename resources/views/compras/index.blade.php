@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Compras</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('compra.create')}}" class="btn btn-success">Agregar Compras</a>
        </div>
    </div>


    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-4">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de cliente</th>
                    <th scope="col">Apellido paterno de cliente</th>
                    <th scope="col">Apellido materno de cliente</th>
                    <th scope="col">Fecha de compra</th>
                    <th scope="col">Total de Compra</th>
                    <th scope="col">Metodo de Pago</th>

                </tr>
                </thead>
                <tbody>
                @foreach($compras as $compra)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$compra->nombre}}</td>
                        <td>{{$compra->apellido_paterno}}</td>
                        <td>{{$compra->apellido_materno}}</td>
                        <td>{{$compra->fecha}}</td>
                        <td>{{$compra->total_compra }}</td>
                        <td>{{$compra->descripcion}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('compra.edit', $compra->id_compra) }}">Editar</a>
                            <form action="{{ route('compra.destroy', $compra->id_compra) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
