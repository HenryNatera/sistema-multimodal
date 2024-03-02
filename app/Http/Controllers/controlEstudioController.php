<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Pnf;
use App\Models\Semestral_malla;
use App\Models\Student;
use App\Models\Trimestral_malla;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class controlEstudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:control.oferta.academica');
    }

    public function user_registro()
    {
        return view('control_estudio/user_register');
    }

    public function user_store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'cedula' => 'required|numeric',
            'email' => 'required|email',
            'genero' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->cedula = $request->cedula;
        $user->email = $request->email;
        $user->genero = $request->genero;
        $user->password = bcrypt($request->cedula);
        $user->status = 3;
        $user->save();

        return Redirect()->route('control.pnfs.show', ['user' => $user->id]);
    }

    public function pnf_options(User $user)
    {
        $pnfs = Pnf::all();
        $student = Student::all();
        return view('control_estudio/pnf_options', ['user' => $user, 'student' => $student], compact('pnfs'));
    }

    public function users_pendientes()
    {
        $users = User::where('status', 3)->get();
        return view('control_estudio/users_pendientes', compact('users'));
    }

    public function students_show()
    {
        $students = Student::all();
        return view('control_estudio/estudiantes_inscritos', compact('students'));
    }


    public function oferta_academica(User $user, Pnf $pnf)
    {
        $trimestralmallas = Trimestral_malla::all();
        $semestralmallas = Semestral_malla::all();
        return view('control_estudio/oferta_academica', ['user' => $user, 'pnf' => $pnf], compact('trimestralmallas', 'semestralmallas'));
    }

    public function student_trimestral_store(Request $request, User $user)
    {
        $student = new Student;
        $student->user_id = $request->user_id;
        $student->pnf_id = $request->pnf_id;
        $student->trayecto = $request->trayecto;
        $student->student_cedula = $request->student_cedula;
        $student->turno = $request->turn;
        $student->malla = $request->malla;
        $student->confirm = 0;
        $student->save();

        User::where('id', $request->user_id)->update([
            'status' => 0,
        ]);

        return Redirect()->route('control.students');
    }

    public function student_semestral_store(Request $request, User $user)
    {
        $student = new Student;
        $student->user_id = $request->user_id;
        $student->pnf_id = $request->pnf_id;
        $student->semestre = 1;
        $student->confirm = 0;
        $student->student_cedula = $request->student_cedula;
        $student->save();

        User::where('id', $request->user_id)->update([
            'status' => 0,
        ]);

        return Redirect()->route('control.students');
    }

    public function students_egresados()
    {
        return view('control_estudio/egresados');
    }

    public function periodos_show()
    {
        $periodos = Periodo::all();
        return view('control_estudio/gestion_periodos/show', compact('periodos'));
    }

    public function periodos_update(Request $request, Periodo $p)
    {

        $p->carga = $request->p_c;
        $p->solicitud = $request->s_p;
        $p->resagada = $request->i_zp;
        $p->acreditable = $request->p_f;
        $p->pasantia = $request->pasa;
        $p->inscripcion = $request->estu;
        $p->cambio = $request->canbio;
        $p->revision = $request->peri;
        $p->save();

        return Redirect()->route('control.periodos.show');
    }

    public function trimestral_lapso(Periodo $p)
    {

        $fechaActual = Carbon::now();
        $fechaCierre = Periodo::first()->trimestral_lapso_cierre;
        $pnfs = Pnf::where('malla_tipo', 'trimestral')->get();

        return view('control_estudio/gestion_periodos/trimestrales', ['fechaActual' => $fechaActual, 'fechaCierre' => $fechaCierre, 'pe' => $p], compact('pnfs'));
    }

    public function trimestral_cierre($pe)
    {
        $p = Periodo::find($pe);
        $p->lapso_trimestral = 0;
        $p->trimestral_lapso_inicio = null;
        $p->trimestral_lapso_cierre = null;
        $p->carga = 0;
        $p->solicitud = 0;
        $p->revision = 1;
        if ($p->trimestre == 3) {
            $p->inscripcion = 1;
        } else {
            $p->inscripcion = 0;
        }

        $p->save();
        return Redirect()->route('control.lapso.trimestral', $pe);
    }

    public function trimestral_create(Request $request, $pe)
    {

        $request->validate([
            'fi' => 'required',
            'fc' => 'required',
        ]);

        $p = Periodo::find($pe);
        $p->lapso_trimestral = 1;
        $p->trimestral_lapso_inicio = $request->fi;
        $p->trimestral_lapso_cierre = $request->fc;
        $p->carga = 1;
        $p->solicitud = 1;
        $p->revision = 0;

        if ($p->trimestre < 3) {
            $p->trimestre += 1;
        } else {
            $p->trimestre = 1;
        }

        $p->save();
        return Redirect()->route('control.lapso.trimestral', $pe);
    }

    public function semestral_lapso(Periodo $p)
    {
        $pnfs = Pnf::where('malla_tipo', 'semestral')->get();


        $fechaActual = Carbon::now();
        $fechaCierre = Periodo::first()->semestral_lapso_cierre;

        return view('control_estudio/gestion_periodos/semestrales', ['fechaActual' => $fechaActual, 'fechaCierre' => $fechaCierre, 'pe' => $p], compact('pnfs'));
    }
}
