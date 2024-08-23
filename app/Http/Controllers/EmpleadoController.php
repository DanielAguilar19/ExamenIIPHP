<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function getAllEmpleados(){
        $empleados = Empleado::all();
        return view('listaEmpleados', compact('empleados'));
    }
}
