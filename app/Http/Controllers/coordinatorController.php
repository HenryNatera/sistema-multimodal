<?php

namespace App\Http\Controllers;

use App\Models\Pnf;
use App\Models\Semestral_malla;
use App\Models\Trimestral_malla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class coordinatorController extends Controller
{
    public function malla_show(){
        $pnfs = Pnf::all();
        $trimestral_mallas = Trimestral_malla::all();
        $semestral_mallas = Semestral_malla::all();

        return view('coordinador/malla', compact('pnfs', 'trimestral_mallas', 'semestral_mallas'));
    }
}
