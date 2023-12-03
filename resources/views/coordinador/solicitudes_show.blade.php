@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span class="m-1"></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card ml-5 w-75">
            <div class="card-header bg-warning">
                <h5>Solicitudes pendientes</h5>
            </div>
            <div class="card-body">
                <table class="table" id="solicitudes_pendientes" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th style="width: 25px;">Id</th>
                            <th>Solicitud</th>
                            <th>Estudiante</th>
                            <th style="width: 20px;">Trayecto</th>
                            <th>Estatus</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solicitudes as $solicitud)
                            @if ($solicitud->solicitud_status == 'pendiente' && $solicitud->pnf->user_id == Auth::user()->id)
                                <tr class="p-0" style="font-size: 13px;">
                                    <form action="{{ route('coordinador.solicitud.update', $solicitud) }}" method="POST">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="solicitud_status" value="aprovada">
                                        <td class="p-1 pl-3">{{ $solicitud->id }}</td>
                                        <td class="p-1">{{ $solicitud->solicitud_tipo }}</td>
                                        <td class="p-1">{{ $solicitud->user->name }} {{ $solicitud->user->last_name }}
                                        </td>
                                        @foreach ($students as $student)
                                            @if ($student->user_id == $solicitud->user_id)
                                                <td style="text-align: center;">{{ $student->trayecto }}</td>
                                            @endif
                                        @endforeach
                                        <td style="text-transform: capitalize;" class="text-warning p-1">
                                            {{ $solicitud->solicitud_status }}</td>
                                        <td class="p-1"><button class="btn btn-success px-1 py-0"
                                                style="font-size: 13px;">Aprobar</button><a
                                                class="ml-1 btn btn-primary px-1 py-0" style="font-size: 13px;"
                                                href="{{ route($solicitud->solicitud_view, $solicitud) }}"
                                                target='_blank'>Imprimir</a></td>
                                    </form>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



        <div class="card ml-5 w-75 mt-5 mb-5">
            <div class="card-header bg-success">
                <h5>Solicitudes aprovadas</h5>
            </div>
            <div class="card-body">
                <table class="table" style="font-size: 13px;" id="solicitudes_aprovadas">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Solicitud</th>
                            <th>Estudiante</th>
                            <th style="width: 20px;">Trayecto</th>
                            <th>Estatus</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solicitudes as $solicitud)
                            @if ($solicitud->solicitud_status == 'aprovada' && $solicitud->pnf->user_id == Auth::user()->id)
                                <tr>
                                    <td class="p-1 pl-3">{{ $solicitud->id }}</td>
                                    <td class="p-1">{{ $solicitud->solicitud_tipo }}</td>
                                    <td class="p-1">{{ $solicitud->user->name }} {{ $solicitud->user->last_name }}</td>
                                    @foreach ($students as $student)
                                        @if ($student->user_id == $solicitud->user_id)
                                            <td style="text-align: center;">{{ $student->trayecto }}</td>
                                        @endif
                                    @endforeach
                                    <td style="text-transform: capitalize;" class="text-success p-1">
                                        {{ $solicitud->solicitud_status }}</td>
                                    <td class="p-1"><a class="ml-1 btn btn-primary px-1 py-0"
                                            href="{{ route($solicitud->solicitud_view, $solicitud) }}"
                                            style="font-size: 13px;" target='_blank'>Imprimir</a></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
@section('js')
    <script>
        new DataTable('#solicitudes_pendientes', {
            "pageLength": 10,
            "order": [
                [0, "desc"]
            ],
            responsive: true,
            autoWidth: false
        });


        new DataTable('#solicitudes_aprovadas', {
            "pageLength": 10,
            "order": [
                [0, "desc"]
            ],
            responsive: true,
            autoWidth: false
        });
    </script>
@stop
