<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
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

        return view('professor/regular_data', ['regular' => $regular, 're' => $re, 'student' => $student], compact('students', 'regular_evaluations', 'periodo'));
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

    public function enlaces_store(Request $request, Regular $regular)
    {
    }
}
