<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Regular;
use App\Models\RegularEvaluation;
use App\Models\Student;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function asignaturas(Professor $professor)
    {
        $regulares = Regular::all();

        return view('master/asignaturas', ['professor' => $professor], compact('regulares'));
    }

    public function asignatura_data(Regular $regular, Student $student)
    {

        $students = Student::all();
        $regularEvaluations = RegularEvaluation::all();

        return view('master/asignatura_data', ['regular' => $regular, 'student' => $student], compact('students', 'regularEvaluations'));
    }

    public function regular_inscribir(Request $request, Regular $regular)
    {


        $inscribir = new RegularEvaluation();

        $inscribir->user_id = $request->user_id;
        $inscribir->regular_id = $request->regular_id;

        $inscribir->save();


        return Redirect()->route('asignatura.test.data', ['regular' => $regular]);
    }

    public function regular_store(Request $request)
    {
        $regular = new Regular;
        $regular->pnf_id = $request->pnf_id;
    }
}
