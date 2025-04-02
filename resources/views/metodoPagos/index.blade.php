@extends('layouts.side')
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success text-center">Metodos de Pagos</h1>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('metodoPago.create')}}" class="btn btn-success">Agregar Metodos de pagos</a>
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
                    <th scope="col">Metodo de pago</th>
                </tr>
                </thead>
                <tbody>
                @foreach($metodo_pagos as $metodo_pago)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{ $metodo_pago->descripcion}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('metodoPago.edit', $metodo_pago->id_metodo_pago) }}">Editar</a>
                            <form action="{{ route('metodoPago.destroy', $metodo_pago->id_metodo_pago) }}" method="POST" style="display:inline;">
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
