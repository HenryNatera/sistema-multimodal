@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px; text-transform:capitalize;">Asignacion de horas Trayecto {{$regular->regular_trayecto}}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:flex-start">
    <div class="d-flex flex-wrap w-100 mb-5">
        <div class="card ml-5 w-25">
            <div class="card-header">
                <p><b>Nombre:</b> {{$profesor->user->name}} {{$profesor->user->last_name}}</p>
                <p><b>PNF:</b> {{$pnf->pnf_name}}</p>
                <p style="text-transform: capitalize;"><b>Unidad Curricular:</b> {{$regular->regular_name}} {{$regular->regular_trayecto}}</p>
            </div>
            <div class="card-body">
                <form action="{{route('academica.regular.horario.store')}}" method="POST">
                    @csrf 
                    <input type="hidden" value="{{$regular->id}}" name="regular_id">
                    <input type="hidden" value="{{$profesor->user_id}}" name="user_id">
                    <div>
                        <label for="turno">Turno</label>
                        <select class="input-group" name="turno" id="turno">
                            <option class="dropdown-item" value="" selected>Seleccione</option>
                            <option class="dropdown-item" value="1">Mañana</option>
                            <option class="dropdown-item" value="2">Tarde</option>
                        </select>
                    </div>
            </div>
        </div>

        <div class="card ml-4 w-50">
            <div class="card-header pb-0 m-0 d-flex display-flex flex-wrap">
            </div>
            <div class="card-body d-flex">
                <div class="w-50">
                    <label for="">Dia</label>
                    <select class="input-group w-75 mb-3" name="dia" id="">
                        <option value="" selected>Seleccione</option>
                        <option value="1">Lunes</option>
                        <option value="2">Martes</option>
                        <option value="3">Miercoles</option>
                        <option value="4">Jueves</option>
                        <option value="5">Viernes</option>
                    </select>
                    
                </div>
                <div class="w-50">
                    <label for="">Hora de Entrada</label>
                    <input type="time" name="hora_entrada" class="input-group w-75  mb-3">
                    <label for="">Hora de Salida</label>
                    <input type="time" name="hora_salida" class="input-group w-75  mb-3">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end w-75 ml-5">
            <input type="submit" class="btn btn-dark" value="Asignar">
        </form>

        </div>
    </div>


</main>
@stop
