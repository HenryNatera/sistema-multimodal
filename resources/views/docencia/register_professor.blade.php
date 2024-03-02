@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            /* WebKit */
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@stop

@section('content')
    <h1 style="font-size: 19px" class="ml-5">Registro Docente: Datos personales</h1>
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card w-50 ml-5">
            <div class="card-body">
                <form action="{{route('docencia.user.store')}}" method="POST" style="display:flex; flex-wrap:wrap;">
                    @csrf
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Nombre</label>
                        <input type="text" name="name" class="input-group w-50" style="font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Segundo Nombre</label>
                        <input type="text" class="input-group w-50" style="font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Apellido</label>
                        <input type="text" name="last_name" class="input-group w-50" style="font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Segundo Apellido</label>
                        <input type="text" class="input-group w-50" style="font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Cedula</label>
                        <input type="number" name="cedula" class="input-group" style="width:30%; font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Dia de nacimiento</label>
                        <input type="date" class="input-group" style="width:40%; font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="w-100" class="input-group w-25" style="font-size: 14px">Genero</label>
                        <select name="genero" id="">
                            <option value="1">M</option>
                            <option value="2">F</option>
                        </select>
                    </div>
                   <div class="card-header p-1 d-flex justify-content-end w-75 mt-5">
                    <button type="submit" class="btn btn-primary ">Enviar a Validacion</button>
                   </div>
                </form>
            </div>
        </div>
    </main>
@stop
