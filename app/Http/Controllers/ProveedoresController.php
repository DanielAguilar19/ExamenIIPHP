<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function getAllProveedores(){
        $proveedores = Proveedores::all();
        return view('listaProveedores', compact('proveedores'));
    }
    public function getFormProveedores(){
        return view('formPorveedor');
    }
    public function postFormProveedores(Request $req){
        $nvoProvee = new Proveedores();
        $nvoProvee->nombre = $req->nombre;
        $nvoProvee->fecha_registro = $req->fecha_registro;
        $nvoProvee->telefono = $req->telefono;
        $nvoProvee->correo =$req->correo;
        $nvoProvee->save();

        return redirect('/proveedores');
    }
}
