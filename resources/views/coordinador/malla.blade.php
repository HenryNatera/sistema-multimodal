@extends('adminlte::page')

@section('title', 'Malla Academica')

@section('content_header')
    @foreach ($pnfs as $pnf)
        @if ($pnf->user_id == Auth::user()->id)
            <h1 style="font-size: 20px">Malla Curricular Actual {{ $pnf->pnf_name }} </h1>
        @endif
    @endforeach
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

@stop

@section('content')

    <main style="display: flex; flex-wrap:wrap; justify-content:space-around">

        <!--==================================== TRIMESTRAL ==================================-->

        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'trimestral')
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Trayecto I</b></h5>
                        <table class="table table-bordered" style="font-size:12px;">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Unidad Curricular</th>
                                    <th>Trimestre I</th>
                                    <th>UC</th>
                                    <th>Trimestre II</th>
                                    <th>UC</th>
                                    <th>Trimestre III</th>
                                    <th>UC</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trimestral_mallas as $tm)
                                    @if ($tm->pnf_id == $pnf->id)
                                        @if ($tm->trayecto == 'i')
                                            <tr>
                                                <td class="p-1" style="text-transform:uppercase; text-align:center;">###
                                                </td>
                                                <td class="p-1">{{ $tm->unidad_curricular }} {{ $tm->trayecto }}</td>
                                                <td class="p-1">{{ $tm->trimestre_i }}</td>
                                                <td class="p-1" style="text-align:center;">{{ $tm->uc_i }}</td>
                                                <td class="p-1">{{ $tm->trimestre_ii }}</td>
                                                <td class="p-1" style="text-align:center;">{{ $tm->uc_ii }}</td>
                                                <td class="p-1">{{ $tm->trimestre_iii }}</td>
                                                <td class="p-1" style="text-align:center;">{{ $tm->uc_iii }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'trimestral')
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Trayecto II</b></h5>
                        <table class="table table-bordered" style="font-size:12px">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Unidad Curricular</th>
                                    <th>Trimestre I</th>
                                    <th>UC</th>
                                    <th>Trimestre II</th>
                                    <th>UC</th>
                                    <th>Trimestre III</th>
                                    <th>UC</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trimestral_mallas as $tm)
                                    @if ($tm->pnf_id == $pnf->id)
                                        @if ($tm->trayecto == 'ii')
                                            <tr>
                                                <td class="p-1" style="text-transform:uppercase; text-align:center;">###
                                                </td>
                                                <td class="p-1">{{ $tm->unidad_curricular }} {{ $tm->trayecto }}</td>
                                                <td class="p-1">{{ $tm->trimestre_i }}</td>
                                                <td class="p-1">{{ $tm->uc_i }}</td>
                                                <td class="p-1">{{ $tm->trimestre_ii }}</td>
                                                <td class="p-1">{{ $tm->uc_ii }}</td>
                                                <td class="p-1">{{ $tm->trimestre_iii }}</td>
                                                <td class="p-1">{{ $tm->uc_iii }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'trimestral')
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Trayecto III</b></h5>
                        <table class="table table-bordered" style="font-size: 12px">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Unidad Curricular</th>
                                    <th>Trimestre I</th>
                                    <th>UC</th>
                                    <th>Trimestre II</th>
                                    <th>UC</th>
                                    <th>Trimestre III</th>
                                    <th>UC</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trimestral_mallas as $tm)
                                    @if ($tm->pnf_id == $pnf->id)
                                        @if ($tm->trayecto == 'iii')
                                            <tr>
                                                <td class="p-1" style="text-transform:uppercase; text-align:center;">###
                                                </td>
                                                <td class="p-1">{{ $tm->unidad_curricular }} {{ $tm->trayecto }}</td>
                                                <td class="p-1">{{ $tm->trimestre_i }}</td>
                                                <td class="p-1">{{ $tm->uc_i }}</td>
                                                <td class="p-1">{{ $tm->trimestre_ii }}</td>
                                                <td class="p-1">{{ $tm->uc_ii }}</td>
                                                <td class="p-1">{{ $tm->trimestre_iii }}</td>
                                                <td class="p-1">{{ $tm->uc_iii }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'trimestral')
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Trayecto IV</b></h5>
                        <table class="table table-bordered" style="font-size: 12px">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Unidad Curricular</th>
                                    <th>Trimestre I</th>
                                    <th>UC</th>
                                    <th>Trimestre II</th>
                                    <th>UC</th>
                                    <th>Trimestre III</th>
                                    <th>UC</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trimestral_mallas as $tm)
                                    @if ($tm->pnf_id == $pnf->id)
                                        @if ($tm->trayecto == 'iv')
                                            <tr>
                                                <td class="p-1" style="text-transform:uppercase; text-align:center;">###
                                                </td>
                                                <td class="p-1">{{ $tm->unidad_curricular }} {{ $tm->trayecto }}</td>
                                                <td class="p-1">{{ $tm->trimestre_i }}</td>
                                                <td class="p-1">{{ $tm->uc_i }}</td>
                                                <td class="p-1">{{ $tm->trimestre_ii }}</td>
                                                <td class="p-1">{{ $tm->uc_ii }}</td>
                                                <td class="p-1">{{ $tm->trimestre_iii }}</td>
                                                <td class="p-1">{{ $tm->uc_iii }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach


        <!--==================================== SEMESTRAL ==================================-->

        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'semestral')
                <div class="card" style="width:47%;">
                    <div class="card-body">

                        <h5 class="my-0 py-0 px-4"><b>Semestre I</b></h5>
                        <table class="table table-bordered mt-0 pt-0">
                            <thead>
                                <tr>
                                    <th class="py-0">Codigo</th>
                                    <th class="py-0">Asignatura</th>
                                    <th class="py-0">HT</th>
                                    <th class="py-0">HTP</th>
                                    <th class="py-0">HP</th>
                                    <th class="py-0">TH</th>
                                    <th class="py-0">UC</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 13px;">
                                @foreach ($semestral_mallas as $sm)
                                    @if ($sm->pnf_id == $pnf->id && $sm->semestre == 1)
                                        <tr>
                                            <td class="py-1">###</td>
                                            <td class="py-1 text-capitalize">{{ $sm->asignatura }}</td>
                                            <td class="py-1">{{ $sm->ht }}</td>
                                            <td class="py-1">{{ $sm->htp }}</td>
                                            <td class="py-1">{{ $sm->hp }}</td>
                                            <td class="py-1">{{ $sm->th }}</td>
                                            <td class="py-1">{{ $sm->uc }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach


        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'semestral')
                <div class="card" style="width:47%;">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Semestre II</b></h5>
                        <table class="table table-bordered mt-0 pt-0">
                            <thead>
                                <tr>
                                    <th class="py-0">Codigo</th>
                                    <th class="py-0">Asignatura</th>
                                    <th class="py-0">HT</th>
                                    <th class="py-0">HTP</th>
                                    <th class="py-0">HP</th>
                                    <th class="py-0">TH</th>
                                    <th class="py-0">UC</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 13px;">
                                @foreach ($semestral_mallas as $sm)
                                    @if ($sm->pnf_id == $pnf->id && $sm->semestre == 2)
                                        <tr>
                                            <td class="py-1">###</td>
                                            <td class="py-1 text-capitalize">{{ $sm->asignatura }}</td>
                                            <td class="py-1">{{ $sm->ht }}</td>
                                            <td class="py-1">{{ $sm->htp }}</td>
                                            <td class="py-1">{{ $sm->hp }}</td>
                                            <td class="py-1">{{ $sm->th }}</td>
                                            <td class="py-1">{{ $sm->uc }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach


        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'semestral')
                <div class="card" style="width:47%;">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Semestre III</b></h5>
                        <table class="table table-bordered mt-0 pt-0">
                            <thead>
                                <tr>
                                    <th class="py-0">Codigo</th>
                                    <th class="py-0">Asignatura</th>
                                    <th class="py-0">HT</th>
                                    <th class="py-0">HTP</th>
                                    <th class="py-0">HP</th>
                                    <th class="py-0">TH</th>
                                    <th class="py-0">UC</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 13px;">
                                @foreach ($semestral_mallas as $sm)
                                    @if ($sm->pnf_id == $pnf->id && $sm->semestre == 3)
                                        <tr>
                                            <td class="py-1">###</td>
                                            <td class="py-1 text-capitalize">{{ $sm->asignatura }}</td>
                                            <td class="py-1">{{ $sm->ht }}</td>
                                            <td class="py-1">{{ $sm->htp }}</td>
                                            <td class="py-1">{{ $sm->hp }}</td>
                                            <td class="py-1">{{ $sm->th }}</td>
                                            <td class="py-1">{{ $sm->uc }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif
        @endforeach


        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'semestral')
                <div class="card" style="width:47%;">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Semestre IV</b></h5>
                        <table class="table table-bordered mt-0 pt-0">
                            <thead>
                                <tr>
                                    <th class="py-0">Codigo</th>
                                    <th class="py-0">Asignatura</th>
                                    <th class="py-0">HT</th>
                                    <th class="py-0">HTP</th>
                                    <th class="py-0">HP</th>
                                    <th class="py-0">TH</th>
                                    <th class="py-0">UC</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 13px;">
                                @foreach ($semestral_mallas as $sm)
                                    @if ($sm->pnf_id == $pnf->id && $sm->semestre == 4)
                                        <tr>
                                            <td class="py-1">###</td>
                                            <td class="py-1 text-capitalize">{{ $sm->asignatura }}</td>
                                            <td class="py-1">{{ $sm->ht }}</td>
                                            <td class="py-1">{{ $sm->htp }}</td>
                                            <td class="py-1">{{ $sm->hp }}</td>
                                            <td class="py-1">{{ $sm->th }}</td>
                                            <td class="py-1">{{ $sm->uc }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif
        @endforeach


        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'semestral')
                <div class="card" style="width:47%;">
                    <div class="card-body">

                        <h5 class="my-0 py-0 px-4"><b>Semestre V</b></h5>
                        <table class="table table-bordered mt-0 pt-0">
                            <thead>
                                <tr>
                                    <th class="py-0">Codigo</th>
                                    <th class="py-0">Asignatura</th>
                                    <th class="py-0">HT</th>
                                    <th class="py-0">HTP</th>
                                    <th class="py-0">HP</th>
                                    <th class="py-0">TH</th>
                                    <th class="py-0">UC</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 13px;">
                                @foreach ($semestral_mallas as $sm)
                                    @if ($sm->pnf_id == $pnf->id && $sm->semestre == 5)
                                        <tr>
                                            <td class="py-1">###</td>
                                            <td class="py-1 text-capitalize">{{ $sm->asignatura }}</td>
                                            <td class="py-1">{{ $sm->ht }}</td>
                                            <td class="py-1">{{ $sm->htp }}</td>
                                            <td class="py-1">{{ $sm->hp }}</td>
                                            <td class="py-1">{{ $sm->th }}</td>
                                            <td class="py-1">{{ $sm->uc }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif
        @endforeach


        @foreach ($pnfs as $pnf)
            @if ($pnf->user_id == Auth::user()->id && $pnf->malla_tipo == 'semestral')
                <div class="card" style="width:47%;">
                    <div class="card-body">
                        <h5 class="my-0 py-0 px-4"><b>Semestre VI</b></h5>
                        <table class="table table-bordered mt-0 pt-0">
                            <thead>
                                <tr>
                                    <th class="py-0">Codigo</th>
                                    <th class="py-0">Asignatura</th>
                                    <th class="py-0">HT</th>
                                    <th class="py-0">HTP</th>
                                    <th class="py-0">HP</th>
                                    <th class="py-0">TH</th>
                                    <th class="py-0">UC</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 13px;">
                                @foreach ($semestral_mallas as $sm)
                                    @if ($sm->pnf_id == $pnf->id && $sm->semestre == 6)
                                        <tr>
                                            <td class="py-1">###</td>
                                            <td class="py-1 text-capitalize">{{ $sm->asignatura }}</td>
                                            <td class="py-1">{{ $sm->ht }}</td>
                                            <td class="py-1">{{ $sm->htp }}</td>
                                            <td class="py-1">{{ $sm->hp }}</td>
                                            <td class="py-1">{{ $sm->th }}</td>
                                            <td class="py-1">{{ $sm->uc }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif
        @endforeach



    </main>
@stop
