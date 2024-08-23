<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

Route::get('/productos', [ProductoController::class, 'getAllProductos'])->name('getProductos');
Route::get('/empleados', [EmpleadoController::class, 'getAllEmpleados'])->name('getEmpleados');
Route::get('/proveedor', [ProveedoresController::class, 'getAllProveedores'])->name('getProveedores');

});
