<?php

namespace App\Http\Controllers;

use App\Models\Metodo_Pago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodo_pagos = Metodo_Pago::all();
        //dd($metodo_pagos);
        return view("metodoPagos.index", compact('metodo_pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('metodoPagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Metodo_Pago::create($request->all());
        return redirect()->route('metodoPago.index')->with('success', 'Tarjeta agregada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metodo_Pago  $metodo_Pago
     * @return \Illuminate\Http\Response
     */
    public function show(Metodo_Pago $metodo_Pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metodo_Pago  $metodo_Pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Metodo_Pago $metodoPago)
    {
        return view('metodoPagos.edit', compact('metodoPago'));
    }


    public function update(Request $request, Metodo_Pago $metodoPago)
    {
        $metodoPago->update($request->all());
        return redirect()->route('metodoPago.index')->with('success', 'Metodo editado correctamente.');
    }


    public function destroy(Metodo_Pago $metodoPago)
    {
        //dd($metodo_Pago);
        $metodoPago->delete();
        //dd($metodoPago);
        return redirect()->route('metodoPago.index')->with('success', 'Metodo borrado correctamente.');
    }
}
