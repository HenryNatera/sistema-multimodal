<?php

namespace App\Http\Controllers;

use App\Models\Pnf;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Http\Request;

class docenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:docencia.profesores.show');
    }

    public function profesores_show()
    {
        $profesores = Professor::all();
        return view('docencia/profesores', compact('profesores'));
    }

    public function profesor_register()
    {
        return view('docencia/register_professor');
    }

    public function user_store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->cedula = $request->cedula;
        $user->genero = $request->genero;
        $user->password = bcrypt($request->cedula);
        $user->status = 4;
        $user->save();

        return Redirect()->route('docencia.docentes.validation');

    }

    public function docentes_waiting(){
        $users = User::where('status', 4)->get();
        return view('docencia/docentes_waiting', compact('users'));
    }

    public function professor_validating(User $user){
        $pnfs = Pnf::all();
        return view('docencia/docente_validating', ['user' => $user], compact('pnfs'));
        
    }

    public function professor_store(Request $request, User $user){
        $professor = new Professor;
        $professor->user_id = $user->id;
        $professor->pnf_recomendado = $request->p_r;
        $professor->titulo = $request->p_t;
        $professor->especializacion = $request->espe;
        $professor->save();

        User::where('id', $user->id)->update([
            'status' => 0,
        ]);

        return Redirect()->route('docencia.professor.data', ['user' => $user]);
    }

    public function professor_data(User $user){
        return view('docencia/professor_data', ['user' => $user]);
    }
}
