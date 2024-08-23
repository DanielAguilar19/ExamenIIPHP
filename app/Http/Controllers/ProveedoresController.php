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
}
