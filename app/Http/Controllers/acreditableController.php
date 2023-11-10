<?php

namespace App\Http\Controllers;

use App\Models\Acreditable;
use App\Models\AcreditableEvaluation;
use App\Models\Professor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class acreditableController extends Controller
{
    public function show(){

        $acreditables = Acreditable::orderBy('id', 'desc')->paginate();

        return view('acreditable/show', compact('acreditables'));
    }

    public function create(){

        $professors = Professor::all();

        return view('acreditable/create', compact('professors'));
    }

    public function store(Request $request){
        $request->validate([
            'acreditable_name' => 'required|regex:/^[\pL\s\-]+$/u|min:2|max:120',
        ]);

        $acreditable = new Acreditable;

        $acreditable->acreditable_name = $request->acreditable_name;
        $acreditable->acreditable_turno = $request->acreditable_turno;
        $acreditable->acreditable_profesor = $request->acreditable_profesor;
        $acreditable->acreditable_modalidad = $request->acreditable_modalidad;

        $acreditable->save();

        return Redirect()->route('acreditable.show');
    }

    public function data(Acreditable $acreditable, Student $student){ 

        $acreditables = Acreditable::all();
        $acreditableEvaluations = AcreditableEvaluation::all();
        $students = Student::all();
        $user = User::all();

        return view('acreditable/data', ['acreditable' => $acreditable, 'student' => $student], compact('acreditables', 'user', 'students', 'acreditableEvaluations'));
    }

    public function inscribir(Request $request){

        $inscribir = new AcreditableEvaluation;

        $inscribir->user_id = $request->student_id;
        $inscribir->acreditable_id = $request->acreditable_id;

        $inscribir->save();

        return Redirect()->route('acreditable.show');

    }
}
