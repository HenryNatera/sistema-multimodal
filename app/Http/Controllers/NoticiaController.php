<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function show(Noticia $noticia){
        return view('noticias/noticias_show', ['noticia' => $noticia]);
    }
}
