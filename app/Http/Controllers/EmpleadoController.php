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

    public function getFormEmpleados(){
        return view('formEmpleado');
    }

    public function postFormEmpleados(Request $req){
        $nvoEmple = new Empleado();
        $nvoEmple->nombre = $req->nombre;
        $nvoEmple->apellido = $req->apellido;
        $nvoEmple->fecha_ingreso = $req->fecha_ingreso;
        $nvoEmple->salario =$req->salario;
        $nvoEmple->save();

        return redirect('/empleados');
    }
}
