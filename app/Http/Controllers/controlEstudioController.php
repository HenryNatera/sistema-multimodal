<?php

namespace App\Http\Controllers;

use App\Models\Pnf;
use App\Models\Semestral_malla;
use App\Models\Student;
use App\Models\Trimestral_malla;
use App\Models\User;
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
        $user = new User;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->cedula = $request->cedula;
        $user->email = $request->email;
        $user->password = bcrypt($request->cedula);
        $user->status = 3;
        $user->save();

        return Redirect()->route('control.users.pendientes');
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
}
