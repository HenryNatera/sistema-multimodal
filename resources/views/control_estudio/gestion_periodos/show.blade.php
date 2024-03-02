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
        @foreach ($periodos as $p)
            <div class="card w-50">
                <div class="card-header py-1">
                    <h5>Gestion de Lapsos</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{ route('control.lapso.trimestral', $p->id) }}">Trimestrales</a>
                        <a href="{{ route('control.lapso.semestral', $p->id) }}">Semestrales</a>
                    </ul>
                </div>
            </div>

            <div class="card w-75">
                <div class="card-header py-1">
                    <h5>Gestion de los Periodos</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('control.periodos.update', $p) }}" method="POST"
                        class="list-group d-flex flex-row flex-wrap w-100">
                        @csrf @method('PATCH')

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Carga de Notas</label>
                            <select name="p_c" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->carga == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Solicitudes</label>
                            <select name="s_p" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->solicitud == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Inscripcion de resagadas</label>
                            <select name="i_zp" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->resagada == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Inscripcion de Acreditables</label>
                            <select name="p_f" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->acreditable == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Inscripcion de Pasantias</label>
                            <select name="pasa" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->pasantia == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Inscripcion de Estudiantes</label>
                            <select name="estu" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->inscripcion == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Cambio de Carrera</label>
                            <select name="canbio" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->cambio == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>

                        <div class="list-group-item rounded my-2 mx-3 border border-secondary" style="width: 30%">
                            <label style="font-size: 14px" for="">Periodo de Revision</label>
                            <select name="peri" style="font-size: 12px" class="input-group p-1" style="width: 70%"
                                name="" id="">
                                @if ($p->revision == 1)
                                    <option class="" value="1" selected>Vigente</option>
                                    <option class="" value="0">Desactivado</option>
                                @else
                                    <option class="" value="0" selected>Desactivado</option>
                                    <option class="" value="1">Vigente</option>
                                @endif
                            </select>
                        </div>
                        <div class="card-body w-75">
                            <input type="submit" class="btn btn-success" value="Actualizar">
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

    </main>
@stop
