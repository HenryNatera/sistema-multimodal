<?php

namespace App\Http\Controllers;

use App\Models\Pnf;
use App\Models\Professor;
use App\Models\Regular;
use App\Models\Trimestral_malla;
use Illuminate\Http\Request;

class academicaController extends Controller
{
    public function profesores_listado(){
        $profesores = Professor::all();
        return view('academica/profesores', compact('profesores'));
    }

    public function horarios_show(){
        return view('academica/horarios');
    }

    public function profesor_data(Professor $profesor){
        $pnfs = Pnf::all();
        $regulares = Regular::all();
        return view('academica/asignacion', ['profesor' => $profesor], compact('pnfs', 'regulares'));
    }

    public function pnf_revision(Request $request, Professor $profesor, Pnf $pnf){
        $regulares = Regular::all();
        $trimestrals = Trimestral_malla::all();

        return view('academica/pnf_revision',['pnf' => $pnf, 'profesor' => $profesor],  compact('regulares', 'trimestrals'));
    }
    
    public function regular_revision(Request $request, Professor $profesor, Pnf $pnf, Trimestral_malla $trim){
        $regulares = Regular::all();

        return view('academica/regular_revision',['pnf' => $pnf, 'profesor' => $profesor, 'trim' => $trim],  compact('regulares'));
    }
}
