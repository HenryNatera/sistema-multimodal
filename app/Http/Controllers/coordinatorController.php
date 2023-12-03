<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Pnf;
use App\Models\Regular;
use App\Models\RegularHorario;
use App\Models\Semestral_malla;
use App\Models\SolicitudesStudent;
use App\Models\Student;
use App\Models\Trimestral_malla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class coordinatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pnf.malla');
    }

    public function malla_show()
    {
        $pnfs = Pnf::all();
        $trimestral_mallas = Trimestral_malla::all();
        $semestral_mallas = Semestral_malla::all();

        return view('coordinador/malla', compact('pnfs', 'trimestral_mallas', 'semestral_mallas'));
    }

    public function oferta_academica()
    {
        $pnf = pnf::where('user_id', Auth::user()->id)->get();
        $trimestral_mallas = Trimestral_malla::all();
        $semestral_mallas = Semestral_malla::all();

        return view('coordinador/oferta_academica', compact('pnf', 'trimestral_mallas', 'semestral_mallas'));
    }

    public function oferta_store(Request $request)
    {
        $pnf = pnf::where('user_id', Auth::user()->id)->get();

        $data = [];
        $regular_names = $request->regular_name;
        $pnf_ids = $request->pnf_id;
        $modalidades = $request->modalidad;
        $trayectos = $request->trayecto;
        $trimestres = $request->trimestre;
        $semestres = $request->semestre;

        for ($i = 0; $i < count($regular_names); $i++) {
            $data[] = [
                'regular_name' => $regular_names[$i],
                'pnf_id' => $pnf_ids[$i],
                'regular_trayecto' => $trayectos[$i],
                'regular_trimestre' => $trimestres[$i],
                'regular_modalidad' => $modalidades[$i],
                'regular_semestre' => $semestres[$i],
                'periodo_id' => 1,

            ];
        }

        Regular::insert($data);

        return Redirect()->route('coordinador.ofertas.academicas', ['pnf' => $pnf]);
    }

    public function solicitudes_show()
    {
        $solicitudes = SolicitudesStudent::orderBy('id', 'asc')->get();
        $students = Student::all();

        return view('coordinador/solicitudes_show', compact('solicitudes', 'students'));
    }

    public function solicitud_update(Request $request, SolicitudesStudent $solicitud)
    {

        $solicitud->solicitud_status = $request->solicitud_status;
        $solicitud->save();

        return Redirect()->route('coordinador.solicitudes');
    }

    public function horarios_m()
    {
        $regular_horarios = RegularHorario::where('turno', 1)->orderBy('created_at', 'desc')->get();

        return view('coordinador/horarios', compact('regular_horarios'));
    }

    public function horarios_t()
    {
        $regular_horarios = RegularHorario::orderBy('created_at', 'desc')->get();

        return view('coordinador/horarios', compact('regular_horarios'));
    }

    public function noticia_create()
    {
        return view('coordinador/noticias/create');
    }

    public function noticia_store(Request $request)
    {

        $request->validate([
            'imagen' => 'required|image|max:2048',
            'titulo' => 'required',
            'description' => 'required'
        ]);

        $noticia = new Noticia;
        $noticia->user_id = Auth::user()->id;
        $noticia->titulo = $request->titulo;
        $noticia->descripcion = $request->description;

        $image = $request->file('imagen')->store('public/images');
        $image_url = Storage::url($image);

        $noticia->image_name = $image_url;

        $noticia->save();
        return Redirect()->route('home');
    }
}
