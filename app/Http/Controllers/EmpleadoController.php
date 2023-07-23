<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadosModel;

class EmpleadoController extends Controller
{
    /*
        Nuevo
        Editar
        Consultar
        Activar/Inactivar
        Eliminar
    */
    public function nuevo(Request $request){
        $request->validate([
            'c_empleado' => 'required | string',
            'nombre' => 'required | string',
            'edad' => 'integer',
            'f_nacimiento' => 'required | date',
            'genero' => 'string',
            's_base' => 'required | string'
        ]);

        $empleado = new Empleado;
        $empleado->c_empleado = $request->c_empleado;
        $empleado->nombre = $request->nombre;
        $empleado->edad = $request->edad;
        $empleado->f_nacimiento = $request->f_nacimiento;
        $empleado->genero = $request->genero;
        $empleado->s_base = $request->s_base;
        $empleado->estatus = $request->estatus;
        $empleado->save();

        return redirect()->route('panel')->with('Se cargo correctamente el empleado');
    }
}
