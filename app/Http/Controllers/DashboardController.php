<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Dashboard;
use App\Models\Metodo_Pago;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $totalClientes = Cliente::all()->count();
        $totalProveedores = Proveedor::all()->count();
        $comprastotal = Compra::all()->count();
        $personas = Persona::all();
        $clientes = Cliente::all();
        $proveedores = Proveedor::all();
        $compras = Compra::all();
        $productos = Producto::all();
        $metodoPagos = Metodo_Pago::all();

        //dd($personas, $clientes, $proveedores, $compras);
        // Enviar datos a la vista
        return view('dashboard', compact('personas', 'clientes', 'proveedores', 'compras', 'productos','metodoPagos','totalClientes','totalProveedores','comprastotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
