<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("landing",function(){
    return view('landing');
});

Route::get("nosotros",function(){
    return view('nosotros');
});

Route::resource("metodoPago", App\Http\Controllers\MetodoPagoController::class);

Route::resource("direccion", App\Http\Controllers\DireccionController::class);

Route::resource("cliente", App\Http\Controllers\ClienteController::class);

Route::resource("persona", App\Http\Controllers\PersonaController::class);

Route::resource("cliente", App\Http\Controllers\ClienteController::class);

Route::resource("proveedor", App\Http\Controllers\ProveedorController::class);

Route::resource('compra', App\Http\Controllers\CompraController::class);

Route::resource('producto', App\Http\Controllers\ProductoController::class);

route::resource('detallecompra', App\Http\Controllers\DetalleCompraController::class);

route::resource('landing', App\Http\Controllers\LandingController::class);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('nosotros', function (){
    return view('nosotros');
});

Route::get('contactos', function (){
    return view('contactos');
});

Route::get('productosdis', function (){
    return view('productosdis');
});

//Route::get('/producto/{id}', [ProductoController::class, 'mostrar'])->name('producto.mostrar');
