@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 style="font-size: 20px">{{ $pnf->pnf_name }}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-between">
        <div class="card ml-5 w-25">
            <div class="card-header">
                <h6><b>Profesor: </b>{{ $profesor->user->name }} {{ $profesor->user->last_name }}</h6>
            </div>
        </div>
        @foreach ($periodo as $p)
            <div class="card ml-5" style="width: 60%;">
                <div class="card-header">
                    <h5>Trayecto I</h5>
                </div>

                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th style="width: 10px;">Codigo</th>
                            <th>Unidad Curricular</th>
                            <th>Modalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <th>Trayecto I</th>
                        </tr>
                        @foreach ($regulares as $regular)
                            @if (
                                $regular->pnf_id == $pnf->id &&
                                    $regular->user_id == '' &&
                                    $regular->regular_trayecto == 1 &&
                                    $regular->regular_trimestre == $p->trimestre)
                                <tr>
                                    @php
                                        $url = url('academica/horario/' . $profesor->id . '/' . $pnf->id . '/' . $regular->id);
                                    @endphp
                                    <td class="py-0">{{ $regular->id }}</td>
                                    <td class="py-0" style="text-transform:capitalize;"><a
                                            href="{{ $url }}">{{ $regular->regular_name }}
                                            {{ $regular->regular_trayecto }}</a></td>
                                    <td class="py-0"><a href="{{ $url }}">{{ $regular->regular_modalidad }}</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th></th>
                            <th>Trayecto II</th>
                        </tr>
                        @foreach ($regulares as $regular)
                            @if (
                                $regular->pnf_id == $pnf->id &&
                                    $regular->user_id == '' &&
                                    $regular->regular_trayecto == 2 &&
                                    $regular->regular_trimestre == $p->trimestre)
                                <tr>
                                    @php
                                        $url = url('academica/horario/' . $profesor->id . '/' . $pnf->id . '/' . $regular->id);
                                    @endphp
                                    <td class="py-0"><a href="{{ $url }}">{{ $regular->id }}</a></td>
                                    <td class="py-0" style="text-transform:capitalize;"><a
                                            href="{{ $url }}">{{ $regular->regular_name }}
                                            {{ $regular->regular_trayecto }}</a></td>
                                    <td class="py-0"><a href="{{ $url }}">{{ $regular->regular_modalidad }}</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th></th>
                            <th>Trayecto III</th>
                        </tr>
                        @foreach ($regulares as $regular)
                            @if (
                                $regular->pnf_id == $pnf->id &&
                                    $regular->user_id == '' &&
                                    $regular->regular_trayecto == 3 &&
                                    $regular->regular_trimestre == $p->trimestre)
                                <tr>
                                    @php
                                        $url = url('academica/horario/' . $profesor->id . '/' . $pnf->id . '/' . $regular->id);
                                    @endphp
                                    <td class="py-0">{{ $regular->id }}</td>
                                    <td class="py-0" style="text-transform:capitalize;"><a
                                            href="{{ $url }}">{{ $regular->regular_name }}
                                            {{ $regular->regular_trayecto }}</a></td>
                                    <td class="py-0"><a href="{{ $url }}">{{ $regular->regular_modalidad }}</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                        <tr>
                            <th></th>
                            <th>Trayecto IV</th>
                        </tr>
                        @foreach ($regulares as $regular)
                            @if (
                                $regular->pnf_id == $pnf->id &&
                                    $regular->user_id == '' &&
                                    $regular->regular_trayecto == 4 &&
                                    $regular->regular_trimestre == $p->trimestre)
                                <tr>
                                    @php
                                        $url = url('academica/horario/' . $profesor->id . '/' . $pnf->id . '/' . $regular->id);
                                    @endphp
                                    <td class="py-0">{{ $regular->id }}</td>
                                    <td class="py-0" style="text-transform:capitalize;"><a
                                            href="{{ $url }}">{{ $regular->regular_name }}
                                            {{ $regular->regular_trayecto }}</a></td>
                                    <td class="py-0"><a href="{{ $url }}">{{ $regular->regular_modalidad }}</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

            </div>
        @endforeach

    </main>

@stop
