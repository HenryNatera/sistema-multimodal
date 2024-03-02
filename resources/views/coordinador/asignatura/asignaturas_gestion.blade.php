@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 style="font-size: 20px">Bienvenid@ </h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card">
            <div class="card-body">
                <h6><b>Trayecto I</b></h6>

                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <TH>ASIGNATURA</TH>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodos as $ps)
                            @foreach ($pnf as $p)
                                @foreach ($regulares as $r)
                                    @if ($r->pnf_id == $p->id && $r->regular_trimestre == $ps->trimestre && $r->regular_trayecto == 1)
                                        <tr>
                                            <td class="py-0">---</td>
                                            @php
                                                $regular = $r->id
                                            @endphp
                                            <td class="py-0"><a href="{{route('coordinador.asignatura.data', $regular)}}" class="text text-dark">{{ $r->regular_name }}</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6><b>Trayecto II</b></h6>

                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <TH>ASIGNATURA</TH>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodos as $ps)
                            @foreach ($pnf as $p)
                                @foreach ($regulares as $r)
                                    @if ($r->pnf_id == $p->id && $r->regular_trimestre == $ps->trimestre && $r->regular_trayecto == 2)
                                        <tr>
                                            <td class="py-0">---</td>
                                            <td class="py-0"><a href="" class="text text-dark">{{ $r->regular_name }}</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6><b>Trayecto III</b></h6>

                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <TH>ASIGNATURA</TH>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodos as $ps)
                            @foreach ($pnf as $p)
                                @foreach ($regulares as $r)
                                    @if ($r->pnf_id == $p->id && $r->regular_trimestre == $ps->trimestre && $r->regular_trayecto == 3)
                                        <tr>
                                            <td class="py-0">---</td>
                                            <td class="py-0"><a href="" class="text text-dark">{{ $r->regular_name }}</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6><b>Trayecto IV</b></h6>

                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <TH>ASIGNATURA</TH>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodos as $ps)
                            @foreach ($pnf as $p)
                                @foreach ($regulares as $r)
                                    @if ($r->pnf_id == $p->id && $r->regular_trimestre == $ps->trimestre && $r->regular_trayecto == 4)
                                        <tr>
                                            <td class="py-0">---</td>
                                            <td class="py-0"><a href="" class="text text-dark">{{ $r->regular_name }}</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
