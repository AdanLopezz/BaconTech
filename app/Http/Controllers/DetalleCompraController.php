<?php

namespace App\Http\Controllers;

use App\Models\Detalle_compra;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallecompras = Detalle_compra::join('productos','detalle_compras.id_producto','=','productos.id_producto')
        ->join('compras','detalle_compras.id_compra','=','compras.id_compra')
        ->get();
        return view('detallecompras.index', compact('detallecompras'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detallecompras.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Detalle_compra::create([
            'id_compra' => $request->id_compra,
            'id_producto' => $request->id_producto, // Ahora sí se usa id_producto
            'cantidad' => $request->cantidad,
            'subtotal' => $request->subtotal
        ]);

        return redirect()->route('detallecompra.index')->with('success','Detalle Compra agregado correctamente');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalle_compra  $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle_compra $detallecompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalle_compra  $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle_compra $detallecompra)
    {
        return view('detallecompras.edit', compact('detallecompra'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalle_compra  $detalle_compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalle_compra $detallecompra)
    {
       $detallecompra->update(request()->all());
       return redirect()->route('detallecompra.index')->with('success','Detalle Compra actualizado correctamente');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalle_compra  $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle_compra $detallecompra)
    {
        $detallecompra->delete();
        return redirect()->route('detallecompra.index')->with('success','Detalle Compra eliminado correctamente');
        //
    }
}
