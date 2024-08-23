<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getAllProductos(){
        $productos = Producto::all();
        return view('listaProductos', compact('productos'));
    }
}
