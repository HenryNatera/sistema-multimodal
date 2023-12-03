<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\AcreditableEvaluation;
use App\Models\Acreditable;
use App\Models\Evaluation;
use App\Models\Periodo;
use App\Models\Pnf;
use App\Models\Regular;
use App\Models\RegularEvaluation;
use App\Models\Semestral_malla;
use App\Models\SolicitudesStudent;
use App\Models\Trimestral_malla;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Raw;

class studentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:student.asignaturas.show');
    }

    public function asignaturas(Acreditable $acreditable, User $user)
    {

        $res = RegularEvaluation::where('user_id', Auth::user()->id)->get();
        $trims = Trimestral_malla::all();
        $sems = Semestral_malla::all();
        $aev = AcreditableEvaluation::all();
        $student = Student::where('user_id', Auth::user()->id)->get();
        $periodo = Periodo::all();

        return view('student/asignaturas', ['acreditable' => $acreditable, 'user' => $user, 'student' => $student], compact('res', 'aev', 'trims', 'sems', 'periodo'));
    }

    public function regular_data(RegularEvaluation $re)
    {

        $res = RegularEvaluation::where('user_id', Auth::user()->id)->get();
        return view('student/regular_data', ['re' => $re], compact('res'));
    }

    public function regular_store(Request $request)
    {

        $regular_id = $request->regular_id;
        $data = [];

        for ($i = 0; $i < count($regular_id); $i++) {
            $data[] = [
                'user_id' => Auth::user()->id,
                'regular_id' => $regular_id[$i],
            ];
        }
        RegularEvaluation::insert($data);


        return Redirect()->route('student.inscripcion.regulares');
    }

    public function inscripcion_regulares()
    {
        $students = Student::where('user_id', Auth::user()->id)->get();
        $regulares = Regular::orderBy('regular_trimestre', 'asc')->get();
        return view('student/inscribir_regulares', compact('regulares', 'students'));
    }

    public function solicitudes_show()
    {
        $students = Student::all();
        return view('solicitudes/solicitudes', compact('students'));
    }

    public function constancias_certificados(Student $student)
    {
        $solicitudes = SolicitudesStudent::orderBy('id', 'asc')->get();
        return view('solicitudes/constancias_certificaciones', ['student' => $student], compact('solicitudes'));
    }

    public function solicitud_store(Request $request, Student $student)
    {

        $solicitud = new SolicitudesStudent;

        $solicitud->user_id = $request->user_id;
        $solicitud->pnf_id = $request->pnf_id;
        $solicitud->student_id = $request->student_id;
        $solicitud->solicitud_tipo = $request->solicitud_tipo;
        $solicitud->solicitud_view = $request->solicitud_view;
        $solicitud->solicitud_status = $request->solicitud_status;
        $solicitud->save();

        return Redirect()->route('student.solicitudes.constacias.show', ['student' => $student]);
    }
}
