<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\AcreditableEvaluation;
use App\Models\Acreditable;
use App\Models\Evaluation;
use App\Models\Regular;
use App\Models\RegularEvaluation;

class studentController extends Controller
{
    public function asignaturas(Acreditable $acreditable, User $user){

        $res = RegularEvaluation::all();
        $aev = AcreditableEvaluation::all();

        return view('student/asignaturas', ['acreditable' => $acreditable, 'user' => $user], compact('res', 'aev'));
    }

    public function regular_data(Regular $re, RegularEvaluation $regularEvaluation){


        return view('student/regular_data', ['re' => $re, 'regularEvaluation' => $regularEvaluation], compact(''));
    }
}
