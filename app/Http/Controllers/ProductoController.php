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
    public function getFormProductos(){
        return view('formProducto');
    }
    public function postFormProductos(Request $req){
        $nvoProduct = new Producto();
        $nvoProduct->descripcion = $req->descripcion;
        $nvoProduct->precio = $req->precio;
        $nvoProduct->stock = $req->stock;
        $nvoProduct->pagaisv =$req->pagaisv;
        $nvoProduct->save();

        return redirect('/productos');
    }
}