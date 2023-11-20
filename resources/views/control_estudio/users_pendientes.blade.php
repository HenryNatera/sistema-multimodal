@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-between">
        <div class="card" style="width: 23%;">
        <div class="card-body">
           <a href="{{route('control.registro')}}" class="btn btn-primary">Registrar Nuevo</a> 
        </div>
        <div class="card-body">
           <p>Requisitos</p>
           <ul class="list-group list-group-flush">
            <li class="list-group-item px-0">- Cedula de Identidad</li>
            <li class="list-group-item px-0">- Titilo de Bachiller</li>
            <li class="list-group-item px-0">- Notas certificadas</li>
            <li class="list-group-item px-0">- Correo Electronico</li>
           </ul>
        </div>
    </div>

    <div class="card w-75">
        <div class="card-body">
            <table style="font-size: 13px;" class="table" id="students">
                <thead>
                    <tr>
                        <th class="py-1">ID</th>
                        <th class="py-1">Nombre</th>
                        <th class="py-1">Cedula</th>
                        <th class="py-1">Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                            <tr>
                                <td class="py-1"><a href="{{route('control.pnfs.show', $user)}}">{{$user->id}}</a></td>
                                <td class="py-1"><a href="{{route('control.pnfs.show', $user)}}">{{$user->name}} {{$user->last_name}}</a></td>
                                <td class="py-1"><a href="{{route('control.pnfs.show', $user)}}">{{$user->cedula}}</a></td>
                                <td class="py-1"><a href="{{route('control.pnfs.show', $user)}}">Pendiente</a></td>
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
    new DataTable('#students',{
        "pageLength": 10,
        responsive: true,
        autoWidth: false
    });
</script>
@stop