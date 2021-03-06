<?php

use Illuminate\Support\Facades\Route;
use App\Models\clientes;
use App\Models\vehículos;
use App\Models\trabajadores;

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
Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'rcliente'])->name('cliente');
Route::get('/clientes', [App\Http\Controllers\Cliente::class, 'index']);
Route::get('/trabajadores', [App\Http\Controllers\Trabajador::class, 'index']);
Route::get('/vehiculos', [App\Http\Controllers\Vehiculo::class, 'index']);
Route::get('/ventas', [App\Http\Controllers\Venta::class, 'index']);
Route::get('/servicios', [App\Http\Controllers\Servicio::class, 'index']);

/*Route::get('/clientes',function(){
    $cliente=clientes::all();
    foreach ($cliente as $clientes) {
        echo "Nombre: ".$clientes->nombre." Apellidos:"
        .$clientes->apaterno." ".$clientes->amaterno." Dirección: "
        .$clientes->direccion.'<br>';
    }
});*/
