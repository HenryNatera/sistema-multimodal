<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Pnf;
use App\Models\Professor;
use App\Models\Regular;
use App\Models\RegularHorario;
use App\Models\Trimestral_malla;
use Illuminate\Http\Request;

class academicaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:academica.profesores.show');
    }

    public function profesores_listado()
    {
        $profesores = Professor::all();
        return view('academica/profesores', compact('profesores'));
    }

    public function horarios_show()
    {
        $regular_horarios = RegularHorario::all();
        $pnfs = Pnf::all();
        return view('academica/horarios', compact('regular_horarios'));
    }

    public function profesor_data(Professor $profesor)
    {
        $pnfs = Pnf::all();
        $regulares = Regular::all();
        return view('academica/asignacion', ['profesor' => $profesor], compact('pnfs', 'regulares'));
    }

    public function pnf_revision(Request $request, Professor $profesor, Pnf $pnf)
    {
        $regulares = Regular::all();
        $trimestrals = Trimestral_malla::all();
        $periodo = Periodo::all();
        return view('academica/pnf_revision', ['pnf' => $pnf, 'profesor' => $profesor],  compact('regulares', 'trimestrals', 'periodo'));
    }

    public function regular_revision(Request $request, Professor $profesor, Pnf $pnf, Regular $regular)
    {
        $regular_horarios = RegularHorario::all();
        $periodo = Periodo::all();
        return view('academica/regular_revision', ['pnf' => $pnf, 'profesor' => $profesor, 'regular' => $regular],  compact('regular_horarios', 'periodo'));
    }

    public function regular_horario_store(Request $request)
    {

        //===REGULAR
        $regular = Regular::find($request->regular_id);
        $regular->user_id = $request->user_id;
        $regular->save();

        //===HORARIO
        $horario = new RegularHorario;
        $horario->regular_id = $request->regular_id;
        $horario->hora_entrada = $request->hora_entrada;
        $horario->hora_salida = $request->hora_salida;
        $horario->dia = $request->dia;
        $horario->turno = $request->turno;
        $horario->save();

        return Redirect()->route('academica.horarios.show');
    }
}
