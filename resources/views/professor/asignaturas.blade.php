@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 style="font-size: 20px"></h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card" style="width: 60%;">
            <div class="card-header pb-0">
                <h5>Resumen de Asignaturas</h5>
            </div>
            <div class="card-body py-1">
                <ul class="list-group list-group-flush">
                    @foreach ($regulares as $regular)
                        @if ($regular->user_id == Auth::user()->id)
                            <li class="list-group-item py-0 px-4"><a style="color:#000; text-transform:capitalize;"
                                    href="{{ route('professor.regular.data', $regular) }}">{{ $regular->regular_name }} <b
                                        style="text-transform: uppercase; font-weight:400;">{{ $regular->regular_trayecto }}</b></a>
                            </li>
                        @endif
                    @endforeach
                </ul>

            </div>
        </div>
    </main>
@stop
