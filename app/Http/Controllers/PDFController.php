<?php

namespace App\Http\Controllers;

use App\Models\SolicitudesStudent;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function buena_conducta(SolicitudesStudent $solicitud){
        $data = [
            'title' => 'Doc',
            'content' => 'Contenido'
        ];

        $pdf = PDF::loadView('reportes/buena_conducta', ['solicitud' => $solicitud] , $data);
        $pdf->setPaper('A4');
        return $pdf->download('Doc.pdf');
    }

    public function constancia_estudios(SolicitudesStudent $solicitud){
        $data = [
            'title' => 'Doc',
            'content' => 'Contenido'
        ];

        $pdf = PDF::loadView('reportes/constancia_estudios', ['solicitud' => $solicitud] , $data);
        $pdf->setPaper('A4');
        return $pdf->download('Doc.pdf');
    }
}
