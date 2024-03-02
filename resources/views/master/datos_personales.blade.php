@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card w-50">
            <div class="card-header">
                <h4>Datos Personales</h4>
            </div>
            <div class="card-body">
                <p><b>Nombre: </b>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
                <p><b>Cedula: </b>{{ Auth::user()->cedula }}</p>
                @if (Auth::user()->genero == 'masculino')
                    <p><b>Genero: </b>M</p>
                @else
                    <p><b>Genero: </b>F</p>
                @endif
                @if (Auth::user()->hasRole('Coordinador'))
                    @foreach ($pnf as $p)
                        @if (Auth::user()->genero == 'masculino')
                            <p><b>Coordiandor de: </b>{{ $p->pnf_name }}</p>
                        @else
                            <p><b>Coordiandora de: </b>{{ $p->pnf_name }}</p>
                        @endif
                    @endforeach
                @elseif(Auth::user()->hasRole('Estudiante'))
                    @foreach ($student as $s)
                        <p><b>Estudiante de: </b>{{ $s->pnf->pnf_name }}</p>
                        @if ($s->pnf->malla_tipo == 'trimestral')
                            <p><b>Trayecto:</b> {{$s->trayecto}}</p>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@stop
