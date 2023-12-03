@extends('adminlte::page')

@section('title', 'Asignaturas inscritas')

@section('content_header')
    <h1 style="font-size:20px; text-transform:capitalize;">{{ $re->regular_name }}</h1>

@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <div class="card" style="width: 50%">
        <div class="card-header">
        </div>
        <div class="card-body w-75">
            <p>{{ $re->regular->regular_name }} {{ $re->regular->regular_trayecto }}</p>
            <table class="table" style="font-size: 14px; border:1px solid rgba(0,0,0,0.2);">
                <thead>
                    <tr>
                        <th>Evaluacion</th>
                        <th style="width: 20px;">Ponderacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($res as $evaluation)
                        <tr>
                            <td style="padding: 0 0 0 15px;">{{ $evaluation->evaluation_type }}</td>
                            <td style="padding: 0 0 0 15px;">{{ $evaluation->ponderacion }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th style="padding: 0 0 0 15px;">Final</th>
                        <td style="padding: 0 0 0 15px;">#</td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>
@stop
