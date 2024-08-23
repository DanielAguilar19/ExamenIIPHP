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

Route::get('/form/prod', [ProductoController::class, 'getFormProductos'])->name('formProductos');
Route::get('/form/emp', [EmpleadoController::class, 'getFormEmpleados'])->name('formEmpleados');
Route::get('/form/prov', [ProveedoresController::class, 'getFormProveedores'])->name('formProveedores');

Route::post('/producto/crear', [ProductoController::class, 'postFormProductos'])->name('crearProd');
Route::post('/empleado/crear', [EmpleadoController::class, 'postFormEmpleados'])->name('crearEmp');
Route::post('/proveedor/crear', [ProveedoresController::class, 'postFormProveedores'])->name('crearProve');
});
