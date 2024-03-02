@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 style="font-size: 20px">Datos profesor@</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="ml-5 card w-75">
            <div class="card-header">
                <h5><b>Nombre y apellido:</b> {{ $profesor->user->name }} {{ $profesor->user->last_name }}</h5>
            </div>
            <div class="card-body d-flex flex-wrap">
                <div class="bg-light border d-flex justify-content-center" style="width: 150px; height:175px;">
                    <p class="text-secondary align-self-center">FOTO</p>
                </div>
                <div class="w-50 ml-3">
                    <p style="font-size:13px;"><b>Cedula:</b> {{ $profesor->user->cedula }}</p>
                    <p style="font-size:13px;"><b>Titulo:</b> {{ $profesor->titulo }}</p>
                    <p style="font-size:13px;"><b>Componente docente:</b> {{ $profesor->componente_docente }}</p>
                    <p style="font-size:13px;"><b>Especializacion:</b> {{ $profesor->especializacion }}</p>
                    <br>
                </div>
                <div>
                    <h5 class="mt-3 text-secondary"><b>PNF Recomendado:</b> {{ $profesor->pnf_recomendado }}</h5>
                </div>
            </div>
        </div>

        <div class="ml-5 mt-5 w-50 card">
            <div class="card-header">
                <h5 style="font-size: 19px;"><b>Resumen Unidades Regulares Asignadas</b></h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PNF</th>
                            <th>Unidad</th>
                            <th>Turno</th>
                            <th>Hora</th>
                            <th>Listado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Construccion Civil</td>
                            <td>ejemplo (trayecto II)</td>
                            <td>Tarde</td>
                            <td>12;30-3:00 PM</td>
                            <td>Listado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card ml-0 mt-5" style="width: 40%;">
            <div class="card-header">
                <h6><b>Asignar Horas</b></h6>
            </div>
            <div class="list-groupp">
                @foreach ($pnfs as $pnf)
                    @php
                        $url = url('academica/revision/' . $profesor->id . '/' . $pnf->id);
                    @endphp
                    <a class="list-group-item list-group-item-action" href="{{ $url }}">{{ $pnf->pnf_name }}</a>
                @endforeach
            </div>
        </div>
    </main>
@stop
