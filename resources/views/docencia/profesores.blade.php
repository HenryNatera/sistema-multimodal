@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
    <h1  style="font-size: 20px">Registro de Profesores</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:center">
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