@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px; text-transform:capitalize;">Asignacion de horas Trayecto {{$trim->trayecto}}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
    <div class="card ml-5">
        <div class="card-header">
            <p><b>Nombre:</b> {{$profesor->user->name}} {{$profesor->user->last_name}}</p>
            <p><b>PNF:</b> {{$pnf->pnf_name}}</p>
            <p style="text-transform: capitalize;"><b>Unidad Curricular:</b> {{$trim->unidad_curricular}} {{$trim->trayecto}}</p>
        </div>
        <div class="card-body">
            <form action="">
                <div>
                     <label for="turno">Turno</label>
                    <select class="input-group" name="turno" id="turno">
                        <option class="dropdown-item" value="" selected>Seleccione</option>
                        <option class="dropdown-item" value="Mañana">Mañana</option>
                        <option class="dropdown-item" value="Tarde">Tarde</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</main>
@stop
