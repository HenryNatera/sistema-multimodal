@section('css')
    <link rel="stylesheet" href="/css/profesor_regular.css">
@stop
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 style="font-size: 20px"></h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/input_number.css">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@stop

@section('content')

    <main style="display: flex; flex-wrap:wrap; justify-content:space-around; align-items:start;">
        @foreach ($periodo as $p)
            <div class="w-50 px-5">
                <div class="card">

                    <div class="card-header py-1">
                        <h5 style="text-transform:Capitalize; font-size:16px;"><b>{{ $regular->regular_name }}</b>
                            {{ $regular->regular_trayecto }}
                        </h5>
                    </div>
                    <div class="card-body py-1">
                        <p style="font-size:14px;" class="py-0">{{ $regular->pnf->pnf_name }}</p>
                        <p style="font-size:14px;" class="py-0">Estudiantes inscritos:
                            <b>{{ $re->where('regular_id', $regular->id)->count() }}</b>
                        </p>

                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 style="font-size: 15px;">Plan de evaluacion</h5>
                        <button type="button" style="font-size: 13px" class="btn py-0 btn-primary" data-toggle="modal"
                            data-target="#plan_evaluacion">
                            Visualizar
                        </button>
                    </div>
                    <div class="card-header">
                        <h5 style="font-size: 15px;">Listado de inscritos</h5>
                        <button type="button" class="btn btn-primary py-0" style="font-size: 13px;" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Visualizar</button>
                    </div>
                </div>
            </div>


            <!-- Modal PLAN-->
            <div class="modal fade" id="plan_evaluacion" tabindex="-1" role="dialog"
                aria-labelledby="plan_evaluacionLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="plan_evaluacionLabel">Plan de Evaluacion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('professor.plan.update', $regular) }}">
                                <label for="" style="font-size: 13px">Evaluacion I <b>25%</b></label>
                                <input class="input-group w-75" type="text"
                                    placeholder="Describa la actividad o actividades a realizar" style="font-size: 12px">

                                <label for="" style="font-size: 13px">Evaluacion II <b>25%</b></label>
                                <input class="input-group w-75" type="text"
                                    placeholder="Describa la actividad o actividades a realizar" style="font-size: 12px">

                                <label for="" style="font-size: 13px">Evaluacion III <b>25%</b></label>
                                <input class="input-group w-75" type="text"
                                    placeholder="Describa la actividad o actividades a realizar" style="font-size: 12px">

                                <label for="" style="font-size: 13px">Evaluacion IV <b>25%</b></label>
                                <input class="input-group w-75" type="text"
                                    placeholder="Describa la actividad o actividades a realizar" style="font-size: 12px">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-50 px-5">
                <div class="card px-5">
                    <div class="card-header mb-1 py-2 d-flex">
                        <h5 class="py-0 m-0" style="font-size: 15px;"><b>Enlaces para clases virtuales</b></h5>
                    </div>
                    <div class="card-header m-0 py-2 d-flex flex-wrap">
                        <h6 style="font-size: 14px;" class="py-0 m-0">Url de la classroom</h6>
                        <button type="button" style="font-size: 12px;" class="btn btn-outline-secondary px-1 py-0 mx-4"
                            data-toggle="modal" data-target="#classroom">
                            Actualizar
                        </button>
                        <div class="w-75">
                            <a style="font-size: 13px" class="text-info p-0 m-0" href="{{ $regular->clasroom_url }}"
                                target="_blank">{{ $regular->clasroom_url }}</a>
                        </div>
                    </div>

                    <div class="modal fade" id="classroom" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Link Classroom</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('professor.clasroom.update', $regular) }}" method="POST">
                                        @csrf @method('PATCH')
                                        <input type="text" class="input-group" style="font-size: 12px;"
                                            name="c_l">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body m-0 py-0">

                    </div>

                    <div class="card-body m-0 py-0">

                    </div>


                    <div class="card-header m-0 py-2 d-flex flex-wrap">
                        <h6 style="font-size: 14px;" class="py-0 m-0">Otro Medio</h6>
                        <a href="#" style="font-size: 12px;"
                            class="btn btn-outline-secondary px-1 py-0 mx-4 ">Actualizar</a>
                        <div class="w-75">
                            <a style="font-size: 13px" class="text-info p-0 m-0"
                                href="https://classroom.google.com/">https://classroom.google.com/</a>
                        </div>
                    </div>


                </div>


                <div class="card">
                    <div class="card-header mb-1 py-2 d-flex">
                        <h5 class="py-0 m-0" style="font-size: 15px;"><b>Agendar clase en linea</b></h5>
                    </div>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#claseOnline">
                            Empezar
                        </button>


                        <!-- Agendar -->
                        <div class="modal fade" id="claseOnline" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title py-0" id="exampleModalLabel">Detalles de la Clase</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('professor.clase.store', $regular) }}" method="POST">
                                            @csrf
                                            <div>
                                                <p>Plataforma</p>
                                                <input name="plat" type="text" class="input-group"
                                                    style="width: 40%;">
                                            </div>
                                            <div class="mt-2">
                                                <p>Contenido a Tratar</p>
                                                <input name="content" type="text" class="input-group w-50">
                                            </div>

                                            <div class="mt-3 on-fecha">
                                                <label for="">Dia</label>
                                                <input name="day" type="date" class="input-group w-25">
                                                <label for="">Hora</label>
                                                <input name="hour" type="time" class="input-group"
                                                    style="width: 15%;">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Agendar</button>
                                        </form>

                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="card mt-3 mb-5 cel">
                <div class="card-header py-0 bg-primary">
                    <p style="font-size: 16px;"><b>Proximas clases en
                            linea</b></p>
                </div>


                <div class="card-body cel-bd">
                    @foreach ($online_clases as $oc)
                        <div class="cel-bd-cd-c">
                            <div class="card mx-2 cel-bd-cd">
                                <p class="cel-bd-hd">{{ $oc->plataforma }}</p>
                                <div class="cel-bd-h5-c">
                                    <h5 class="cel-bd-h5">{{ $oc->contenido }}
                                </div>
                                </h5>
                                <p class="cel-bd-p">{{ $oc->fecha }} | {{ $oc->hora }}</p>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="card w-75">
                <div class="card'body">
                    <table class="table" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>Nombre y Apellido</th>
                                <th>Cedula</th>
                                <th>25%</th>
                                <th>25%</th>
                                <th>25%</th>
                                <th>25%</th>
                                <th>Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($regular_evaluations as $r_e)
                                <form action="{{ route('professor.evaluation.update', $r_e) }}" method="POST">
                                    @csrf @method('PATCH')
                                    @if ($r_e->regular_id == $regular->id)
                                        <tr>
                                            <td>{{ $r_e->user->name }} {{ $r_e->user->last_name }}</td>
                                            <td>{{ $r_e->user->cedula }}</td>
                                            <input type="hidden" name="user_id" value="{{ $r_e->user_id }}">
                                            <input type="hidden" name="regular_id" value="{{ $regular->id }}">
                                            <td class="py-1"><input
                                                    style="width: 30px; outline:none; text-align:center;" type="number"
                                                    name="unidad_i" class=" p-0"
                                                    value="{{ old('unidad_i', $r_e->unidad_i) }}"></td>
                                            <td class="py-1"><input
                                                    style="width: 30px; outline:none; text-align:center;" type="number"
                                                    name="unidad_ii" class=" p-0"
                                                    value="{{ old('unidad_ii', $r_e->unidad_ii) }}"></td>
                                            <td class="py-1"><input
                                                    style="width: 30px; outline:none; text-align:center;" type="number"
                                                    name="unidad_iii" class=" p-0"
                                                    value="{{ old('unidad_iii', $r_e->unidad_ii) }}"></td>
                                            <td class="py-1"><input
                                                    style="width: 30px; outline:none; text-align:center;" type="number"
                                                    name="unidad_iv" class=" p-0"
                                                    value="{{ old('unidad_iv', $r_e->unidad_iv) }}"></td>
                                            <td class="py-1">
                                                {{ ($r_e->unidad_i + $r_e->unidad_ii + $r_e->unidad_iii + $r_e->unidad_iv) / 4 }}
                                            </td>
                                            <td class="py-1"><button style="font-size: 13px;" type="submit"
                                                    class="btn py-0 px-1 btn-primary">Cargar Notas</button></td>
                                        </tr>
                                    @endif

                                </form>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </main>
@stop
