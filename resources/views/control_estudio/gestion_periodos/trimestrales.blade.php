@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span>
    </span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')

    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        @if ($pe->lapso_trimestral == 1)

            <div class="card w-75">
                <div class="card-header w-100 py-0 d-flex justify-content-end">
                    <p><b>Fecha de cierre: </b>{{ $pe->trimestral_lapso_cierre }}</p>
                </div>
                <div class="card-header py-1">
                    <h6><b>Lapso Actual:</b> {{ $pe->trimestral_lapso_inicio }}</h6>

                </div>
                <div class="card-body d-flex flex-wrap justify-content-between align-items-start">
                    <div class="card w-25">
                        <div class="card-header py-0">
                            <p><b>Periodos</b></p>
                        </div>
                        <div class="card-body py-0">
                            <p class="my-1" class="my-1" style="font-size: 14px;"><b>Trimestre:
                                </b>{{ $pe->trimestre }}</p>
                            <p class="my-1" style="font-size: 14px;"><b>Carga de notas: </b>
                                @if ($pe->carga == 1)
                                    Activa
                                @else
                                    No disponible
                                @endif
                            </p>
                            <p class="my-1" style="font-size: 14px;"><b>Solicitudes: </b>
                                @if ($pe->carga == 1)
                                    Disponibles
                                @else
                                    No disponibles
                                @endif
                            </p>
                            <p class="my-1" style="font-size: 14px;"><b>Acreditables: </b>
                                @if ($pe->acreditable == 1)
                                    Abiertas
                                @else
                                    Cerradas
                                @endif
                            </p>
                            <p class="my-1" style="font-size: 14px;"><b>Pasantias: </b>
                                @if ($pe->pasantia == 1)
                                    Abiertas
                                @else
                                    Cerradas
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="card w-50">
                        <div class="card-bdoy">
                            <table class="table table-bordered" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th class="py-0">PNF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pnfs as $p)
                                        <tr>
                                            <td class="py-0">{{ $p->pnf_name }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                @if ($pe->trimestral_lapso_cierre <= $fechaActual)
                    <div class="card-footer">
                        <form action="{{ route('control.trimestral.cierre', $pe) }}" method="POST">
                            @method('PATCH') @csrf
                            <button class="btn btn-danger w-100">Cerrar lapso</button>
                        </form>
                    </div>
                @else
                    <div class="card-footer">
                        <button class="btn btn-danger w-100" disabled>Cerrar lapso</button>
                    </div>
                @endif

            </div>
        @elseif($pe->lapso_trimestral == 0)
            <div class="card w-75">
                <div class="card-header">
                    <h5>Nuevo Lapso Trimestral</h5>
                </div>
                <div class="card-body d-flex flex-wrap align-items-start justify-content-between">
                    <div class="card w-25 ">

                        <table class="table table-bordered" style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th class="py-0">PNF</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pnfs as $p)
                                    <tr>
                                        <td class="py-0">{{ $p->pnf_name }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card w-25">
                        <form action="{{ route('control.trimestral.new', $pe) }}" method="POST">
                            @method('PATCH')
                            @csrf

                            <ul class="list-group">
                                <li class="list-group-item py-1" style="font-size: 13px;"><b>Estudiantes</b></li>
                                <li class="list-group-item py-1" style="font-size: 13px;"><b>Profesores</b></li>
                            </ul>
                    </div>
                    <div class="card-body w-75">
                        <div>
                            <label for="" style="font-size: 14px;">Inicio del Nuevo Lapso</label>
                            <input name="fi" type="date" style="font-size: 12px;" class="input-group w-25">
                            @error('fi')
                                <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                    requerido</span><br>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label style="font-size: 14px; ">Cierre del Lapso</label>
                            <p class="my-0 text-secondary" style="font-size: 11px;     ">Esta campo
                                no
                                se va a poder cambiar
                            </p>
                            <input name="fc" type="date" style="font-size: 12px;" class="input-group w-25">
                            @error('fc')
                                <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                    requerido</span><br>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success w-100">Establecer Lapso</button>
                </div>
                </form>

            </div>
        @else
            <h1>Se ha producido un error</h1>
        @endif
    </main>
@stop
