@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-evenly">
    <div class="card" style="width: 34rem;">
        <div class="card-header">
            <h5>Datos personales</h5>
        </div>
        <div class="card-body">
            <form action="{{route('control.user.store')}}" class="d-flex flex-wrap" method="POST">
                @csrf
                <div class="" style="width: 45%;">
                    <label for="">Nombres</label>
                    <input type="text" name="name" class="input-group">
                    <label for="">Apellido</label>
                    <input type="text" name="last_name" class="input-group">
                    <div class="input-group mt-2">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Genero</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected></option>
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="ml-2" style="width: 45%;">
                    <label for="">Cedula de Identidad</label>
                    <input type="number" class="input-group" name="cedula">
                    <label for="">Correo electronico</label>
                    <input type="email" class="input-group" name="email">
                </div>
            
        </div>
    </div>

    <div class="card" style="width: 26rem;">
        <div class="card-body d-flex flex-wrap">
                <div class="" style="width: 90%;">
                    <label for="">Foto de perfil</label>
                    <input type="file" name="foto" class="input-group">
                    <label for="" class=" mt-5">Foto cedula de identidad</label>
                    <input type="file" name="foto_cedula" class="input-group">
                </div>
        </div>
    </div>

    <div class="card" style="width: 34rem;">
        <div class="card-header">
            <h5>Datos de vivienda</h5>
        </div>
        <div class="card-body d-flex flex-wrap">
                <div class="" style="width: 45%;">
                    <label for="">Parroquia</label>
                    <input type="text" name="parroquia" class="input-group">
                    <label for="">Direccion</label>
                    <input type="text" name="direccion" class="input-group">
                </div>
                <div class="ml-2" style="width: 45%;">
                    <label for="">Telefono de contacto</label>
                    <input type="number" class="input-group" name="telefono">
                </div>
        </div>
    </div>

    <div class="card-footer pt-1 px-1" style="width: 26rem; margin-top:5%;">
        <div class="card-header bg-white">
            <label for="">Opciones</label>
        </div>
        <div class="card-body d-block">
            <button type="submit" class="btn btn-success w-25 mt-2 mx-2">Guardar</button>  
            </form>
            <button class="btn btn-warning w-25 mt-2 mx-2">Vaciar</button>   
            <button class="btn btn-danger  w-25 mt-2 mx-2">Cancelar</button> 
        </div>
    </div>
</main>
@stop
