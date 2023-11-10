@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px; text-transform:capitalize;">Asignacion de horas Trayecto {{$trim->trayecto}}</h1>
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
            </div>
        </div>

        <div class="card ml-4 w-50">
            <div class="card-header pb-0 m-0 d-flex display-flex flex-wrap">
                <p class="w-50"><b>Horas semanales:</b> 2</p>
                <p class="w-50"><b>Unidades de Credito:</b> {{$trim->uc_i}}</p>
            </div>
            <div class="card-body d-flex">
                <div class="w-50">
                    <label for="">Dia</label>
                    <select class="input-group w-75 mb-3" name="dia_1" id="">
                        <option value="" selected>Seleccione</option>
                        <option value="lunes">Lunes</option>
                        <option value="martes">Martes</option>
                        <option value="miercoles">Miercoles</option>
                        <option value="jueves">Jueves</option>
                        <option value="viernes">Viernes</option>
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

    <div class="card ml-5 mt-5">
        <div class="card-body">
            <table class="table table-bordered table-responsive w-100">
                <thead>
                    <tr style="text-align: center;">
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center;">
                        <td>
                            <p class="my-0">Proyecto</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Proyecto</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Proyecto</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Proyecto</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Proyecto</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>
                            <p class="my-0">Formacion Critica</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Formacion Critica</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Formacion Critica</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Formacion Critica</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                        <td>
                            <p class="my-0">Formacion Critica</p>
                            <p class="my-0">7:00</p>
                            <p class="my-0">8:00</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@stop
