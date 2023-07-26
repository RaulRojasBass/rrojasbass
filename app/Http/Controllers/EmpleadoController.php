<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\EmpleadoRequest;
use App\Http\Controllers\BanxicoController;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
        //$empleados = Empleado::all();
        $empleados = Empleado::where('estatus','!=', 'eliminado')->get();
        return view('internas.panel',['empleados'=> $empleados]);
    }

    public function nuevoup(EmpleadoRequest $request){
        $request->validated();

        $banxicoService = new BanxicoController();
        $dollar = $banxicoService->getDollarAmount();
        $fechaActual = Carbon::now();

        if ($dollar!=null) {
            $s_base_usa = round(($request->input('s_base') / $dollar),2);
        } else {
            $s_base_usa = '';
        }
        
        $empleado = new Empleado();
        $empleado->nombre = $request->input('nombre');
        $empleado->a_pat = $request->input('a_pat');
        $empleado->a_mat = $request->input('a_mat');
        $empleado->edad = $request->input('edad');
        $empleado->f_nacimiento = $request->input('f_nacimiento');
        $empleado->genero = $request->input('genero');
        $empleado->s_base = $request->input('s_base');
        $empleado->s_base_usa = $s_base_usa;
        $empleado->usa_cal = $fechaActual->format('Y-m-d H:i:s');
        $empleado->estatus = 'activo';
        $empleado->save();
        return redirect('/panel')->with('success', 'Se creo correctamente el empleado');
    }

    public function estatus(Request $request, $action, $id){
        if($action=='eliminar'){
            $estatus = 'eliminado';
        }elseif($action=='inactivar'){
            $estatus = 'inactivo';
        }else{
            $estatus = 'activo';
        }
        Empleado::where('id', $id)->update(['estatus' => $estatus]);
        return redirect('/panel')->with('success', 'La acción se genero correctamente');
    }

    public function editar(Request $request, $id){
        $empleado = Empleado::find($id);
        if (!$empleado) {
            return redirect()->to('/panel')->withErrors('No se ha encontrado el registro');
        }
        return view('internas.editar', ['empleado' => $empleado]);
    }

    public function editarup(EmpleadoRequest $request){
        $request->validated();

        $banxicoService = new BanxicoController();
        $dollar = $banxicoService->getDollarAmount();
        $fechaActual = Carbon::now();

        if ($dollar!=null) {
            $s_base_usa = round(($request->input('s_base') / $dollar),2);
        } else {
            $s_base_usa = '';
        }
        
        $empleado = Empleado::find($request->input('id'));
        if ($empleado) {
            $empleado->nombre = $request->input('nombre');
            $empleado->a_pat = $request->input('a_pat');
            $empleado->a_mat = $request->input('a_mat');
            $empleado->edad = $request->input('edad');
            $empleado->f_nacimiento = $request->input('f_nacimiento');
            $empleado->genero = $request->input('genero');
            $empleado->s_base = $request->input('s_base');
            $empleado->s_base_usa = $s_base_usa;
            $empleado->usa_cal = $fechaActual->format('Y-m-d H:i:s');
            $empleado->estatus = 'activo';
            $empleado->save();
        }
        return redirect('/panel')->with('success', 'Se edito correctamente el empleado');
    }

    public function ver(Request $request, $id){
        $empleado = Empleado::find($id);
        if (!$empleado) {
            return redirect()->to('/panel')->withErrors('No se ha encontrado el registro');
        }
        return view('internas.ver', ['empleado' => $empleado]);
    }
}
