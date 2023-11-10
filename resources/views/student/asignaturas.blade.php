@extends('adminlte::page')

@section('title', 'Asignaturas inscritas')

@section('content_header')
    <h1 style="font-size:20px;">Asignaturas inscritas</h1>

@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <div class="card" >
        <div class="card-header">
        </div>
        <div class="card-body" style="width: 60%">
            <table class="table" style="font-size: 14px; border:1px solid rgba(0,0,0,0.2);">
                <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Profesor</th>
                        <th>Ponderacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($res as $re)
                @if ($re->user_id == Auth::user()->id)
                    <tr>
                        <td style="padding: 0 0 0 15px;"><a href="{{route('student.regular.data', $re)}}">{{$re->regular->regular_name}}</a></td>
                        <td style="padding: 0 0 0 15px;"><a href="{{route('student.regular.data', $re)}}">{{$re->regular->user->name}} {{$re->regular->user->last_name}}</a></td>
                        <td style="padding: 0 0 0 15px;"><a href="{{route('student.regular.data', $re)}}">{{$re->evaluation_3}}</a></td>
                    </tr>
                @endif

                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-body" style="width: 60%">
            <table class="table" style="font-size: 14px; border:1px solid rgba(0,0,0,0.2);">
                <thead>
                    <tr>
                        <th>Unidades Acreditables</th>
                    </tr>
                    <tr>
                        <th style="padding: 0 0 0 15px;">Unidad</th>
                        <th style="padding: 0; text-align:center;">%</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aev as $ai)
                @if ($ai->user_id == Auth::user()->id)
                    <tr>
                        <td style="padding: 0 0 0 15px;">{{$ai->acreditable->acreditable_name}}</td>
                        <td style="padding: 0; text-align:center; border-left:1px solid rgba(0,0,0,0.2);">#</td>
                    </tr>
                @endif

                @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@stop
