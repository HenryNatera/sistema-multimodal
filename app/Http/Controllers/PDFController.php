<?php

namespace App\Http\Controllers;

use App\Models\RegularEvaluation;
use App\Models\SolicitudesStudent;
use App\Models\Student;
use App\Models\Trimestral_malla;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function buena_conducta(SolicitudesStudent $solicitud)
    {
        $data = [
            'title' => 'Doc',
            'content' => 'Contenido'
        ];

        $pdf = PDF::loadView('reportes/buena_conducta', ['solicitud' => $solicitud], $data);
        $pdf->setPaper('A4');
        return $pdf->download('Doc.pdf');
    }

    public function constancia_estudios(SolicitudesStudent $solicitud)
    {
        $data = [
            'title' => 'Doc',
            'content' => 'Contenido'
        ];

        $pdf = PDF::loadView('reportes/constancia_estudios', ['solicitud' => $solicitud], $data);
        $pdf->setPaper('A4');
        return $pdf->download('Doc.pdf');
    }

    public function historial()
    {
        $data = [
            'title' => 'Doc',
            'content' => 'Contenido'
        ];
        $student = Student::where('user_id', Auth::user()->id)->get();
        $trimestral = Trimestral_malla::all();
        $res = RegularEvaluation::where('user_id', Auth::user()->id)->get();

        $pdf = PDF::loadView('reportes/historial_academico', compact('student', 'trimestral', 'res'), $data);
        $pdf->setPaper('A4');
        return $pdf->download('Doc.pdf');
    }
}
