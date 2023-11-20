@extends('adminlte::page')

@section('title', 'Asignaturas inscritas')

@section('content_header')
    <h1 style="font-size:20px;">Asignaturas inscritas</h1>

@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Profesor</th>
                        <th>PNF</th>
                        <th>Trayecto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($regulares as $regular)
                        <tr>
                            <td><a style="color:#000;" href="{{route('asignatura.test.data', $regular)}}">{{$regular->regular_name}}</a></td>
                            <td><a style="color:#000;" href="{{route('asignatura.test.data', $regular)}}">{{$regular->user->name}} {{$regular->user->last_name}}</a></td>
                            <td><a style="color:#000;" href="{{route('asignatura.test.data', $regular)}}">{{$regular->pnf->pnf_name}}</a></td>
                            <td style="text-transform: uppercase; text-align:center;"><a style="color:#000;" href="{{route('asignatura.test.data', $regular)}}">{{$regular->regular_trayecto}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route('master.regular.store')}}" method="POST">
            @csrf
        </form>
        </div>
    </div>
@stop
