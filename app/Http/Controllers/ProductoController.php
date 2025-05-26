<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::join('proveedores', 'productos.id_proveedor', '=', 'proveedores.id_proveedor')
            ->join('personas', 'proveedores.id_persona', '=', 'personas.id_persona')
            ->select('productos.*', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
            ->get();

        return view('productos.index', compact('productos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
        // Validar datos (restricciones)
        $request->validate([
            'nom_producto' => 'required|string|max:255',
            'desc_producto' => 'required|string|max:500',
            'stock' => 'required|integer',
            'id_proveedor' => 'required|integer',
            'img_producto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        ]);

        // Todo el pedo de aca abajo es pa la imagen w (creo esta mal pero funciona)
        $producto = Producto::create([
            'nom_producto' => $request->nom_producto,
            'desc_producto' => $request->desc_producto,
            'stock' => $request->stock,
            'precio' => $request->precio,
            'id_proveedor' => $request->id_proveedor,
        ]);
        if ($request->hasFile('img_producto')) {
            $filePath = $request->file('img_producto')->store('uploads', 'public');

            $producto->img_producto = $filePath;
            $producto->save();
        }


        return redirect()->route('producto.index')->with('success', 'Producto agregado');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //dd($producto);
        return  view('productos.vista', compact('producto'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nom_producto' => 'required|string|max:255',
            'desc_producto' => 'required|string|max:255',
            'stock' => 'required|integer',
            'id_proveedor' => 'required|integer',
            'img_producto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
        ]);

        if ($request->hasFile('img_producto')) {

            if ($producto->img_producto) {
                $oldImagePath = storage_path('app/public/' . $producto->img_producto);

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);  // Eliminar la imagen
                }
            }

            $newImagePath = $request->file('img_producto')->store('uploads', 'public');
            $producto->img_producto = $newImagePath;  // Guardar la nueva ruta en la base de datos
        }

        $producto->nom_producto = $request->nom_producto;
        $producto->desc_producto = $request->desc_producto;
        $producto->stock = $request->stock;
        $producto->id_proveedor = $request->id_proveedor;
        $producto->precio = $request->precio;

        $producto->save();

        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index')->with('success','Producto eliminado correctamente');
        //
    }

    public function mostrar($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.vista', compact('producto'));
    }
}
