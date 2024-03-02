@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
<span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<div class="card w-25">
    <div class="card-header">
        <h2 style="font-size: 18px;">Registrar nuevo Docente</h2></div>
    <div class="card-body py-1">
        <a href="{{route('docencia.profesores.register')}}" class="btn py-0 btn-dark">Registro</a>
    </div>
</div>

<main style="display: flex; flex-wrap:wrap; justify-content:center" class="mt-5">
<h1  style="font-size: 18px" class="w-75 mb-3 ">Registro del Personal Docente</h1>

    <div class="card w-75">
        <div class="card-body">
            <table class="table table-bordered" id="profesores" style="font-size: 13px;">
                <thead>
                    <tr>
                        <th class="py-1">Nombre y Apellido</th>
                        <th class="py-1">Cedula</th>
                        <th class="py-1">Titulo</th>
                        <th class="py-1">PNF Recomendado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $profesor)
                        <tr>
                            <td class="py-1 text-capitalize">{{$profesor->user->name}} {{$profesor->user->last_name}}</td>
                            <td class="py-1 text-capitalize">{{$profesor->user->cedula}}</td>
                            <td class="py-1 text-capitalize">{{$profesor->titulo}}</td>
                            <td class="py-1 text-capitalize">{{$profesor->pnf_recomendado}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
</main>
@stop

@section('js')
<script>
    new DataTable('#profesores',{
        responsive: true,
        autoWidth: false
    });
</script>
@stop