<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\OnlineClases;
use App\Models\Periodo;
use App\Models\Regular;
use App\Models\RegularEvaluation;
use App\Models\Student;
use App\Models\Student_evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class professorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:professor.asignaturas.resumen');
    }

    public function asignaturas_resumen()
    {
        $regulares = Regular::all();
        $student = Student::all();

        return view('professor/asignaturas', ['student', $student], compact('regulares'));
    }

    public function regular_data(Regular $regular, Student $student)
    {

        $students = Student::all();
        $regular_evaluations = RegularEvaluation::all();
        $re = RegularEvaluation::all();
        $periodo = Periodo::all();
        $online_clases = OnlineClases::where('regular_id', $regular->id)->orderBy('id', 'desc')->get();

        return view('professor/regular_data', ['regular' => $regular, 're' => $re, 'student' => $student], compact('students', 'regular_evaluations', 'periodo', 'online_clases'));
    }


    public function evaluation_update(Request $request, RegularEvaluation $r_e)
    {

        $r_e->unidad_i = $request->unidad_i;
        $r_e->unidad_ii = $request->unidad_ii;
        $r_e->unidad_iii = $request->unidad_iii;
        $r_e->unidad_iv = $request->unidad_iv;
        $r_e->save();
        $regular = $request->regular_id;

        return Redirect()->route('professor.regular.data', ['regular' => $regular]);
    }

    public function clasroom_update(Request $request, Regular $regular)
    {
        $regular->clasroom_url = $request->c_l;
        $regular->save();

        return Redirect()->route('professor.regular.data', ['regular' => $regular]);
    }

    public function zoom_update(Request $request, Regular $regular)
    {
        $regular->zoom_url = $request->zoom_l;
        $regular->save();

        return Redirect()->route('professor.regular.data', ['regular' => $regular]);
    }

    public function clase_online_store($regular, Request $request)
    {
        $oc = new OnlineClases;
        $oc->regular_id = $regular;
        $oc->plataforma = $request->plat;
        $oc->contenido = $request->content;
        $oc->fecha = $request->day;
        $oc->hora = $request->hour;
        $oc->save();

        return Redirect()->route('professor.regular.data', ['regular' => $regular]);
    }
}
