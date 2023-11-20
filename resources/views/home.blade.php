@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px">Bienvenid@ </h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
    <div class="card" style="width:12rem">
        <div class="card-header bg-white">
            <p class="card-title" style="font-size: 15px">{{Auth::user()->name}} {{Auth::user()->last_name}}</p>
        </div>
        <div class="card-body">
            <p  style="font-size: 15px">{{Auth::user()->cedula}}</p>
        </div>
    </div>
    @if (Auth::user()->role == 'Estudiante')
        
        <div class="card" style="width: 12rem">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item" style="padding:10px 0; font-size: 14px"><a style="color:#000;" href="" class="card-text">Historial Academico</a></li>
                <li class="list-group-item" style="padding:10px 0; font-size: 14px"><a style="color:#000;" href="" class="card-text">Record Academico</a></li>
                <li class="list-group-item" style="padding:10px 0; font-size: 14px"><a style="color:#000;" href="" class="card-text">Horario de clases</a></li>
                </ul>
            </div>
        </div>

    @endif



    <a target="_blank" href="#" class="card text-white bg-dark mb-3" style="max-width: 18rem; position:absolute; right:50px; bottom:20px;">
        <div class="card-header h5">Gaceta Oficial</div>
        <div class="card-body">
        </div>
    </a>
</main>
@stop
