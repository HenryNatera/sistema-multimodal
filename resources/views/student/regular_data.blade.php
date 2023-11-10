@extends('adminlte::page')

@section('title', 'Asignaturas inscritas')

@section('content_header')
    <h1 style="font-size:20px; text-transform:capitalize;">{{$re->regular_name}}</h1>

@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <div class="card" >
        <div class="card-header">
        </div>
        <div class="card-body" style="width: 40%">
            <table class="table" style="font-size: 14px; border:1px solid rgba(0,0,0,0.2);">
                <thead>
                    <tr>
                        <th>Evaluacion</th>
                        <th style="width: 20px;">Ponderacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($evaluations as $evaluation)
                @if ($evaluation->user_id == Auth::user()->id && $evaluation->regular_id == $re->id)
                    <tr>
                        <td style="padding: 0 0 0 15px;">{{$evaluation->evaluation_type}}</td>
                        <td style="padding: 0 0 0 15px;">{{$evaluation->ponderacion}}</td>
                    </tr>
                @endif

                @endforeach
                </tbody>
            </table>
        </div>

       
        
    </div>
@stop
