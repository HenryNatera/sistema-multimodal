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
            <div class="card-header py-1">
                <h5>Datos personales</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('control.user.store') }}" class="d-flex flex-wrap" method="POST">
                    @csrf
                    <div class="" style="width: 45%;">
                        <label style="font-size:13px;" for="">Nombres</label>
                        <input style="font-size: 12px;" type="text" name="name" class="input-group">
                        @error('name')
                            <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                requerido</span><br>
                        @enderror
                        <label style="font-size:13px;" for="">Apellido</label>
                        <input style="font-size: 12px;" type="text" name="last_name" class="input-group">
                        @error('last_name')
                            <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                requerido</span><br>
                        @enderror
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <label style="font-size:13px;" class="input-group-text py-0"
                                    for="inputGroupSelect01">Genero</label>
                            </div>
                            <select class="custom-select py-0" name="genero" id="inputGroupSelect01">
                                <option selected></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            @error('genero')
                                <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                    requerido</span><br>
                            @enderror
                        </div>

                    </div>
                    <div class="ml-2" style="width: 45%;">
                        <label style="font-size:13px;" for="">Cedula de Identidad</label>
                        <input style="font-size: 12px;" type="number" class="input-group" name="cedula">
                        @error('cedula')
                            <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                requerido</span><br>
                        @enderror
                        <label style="font-size:13px;" for="">Correo electronico</label>
                        <input style="font-size: 12px;" type="email" class="input-group" name="email">
                        @error('email')
                            <span class="alert alert-danger py-0" style="font-size:13px">Campo
                                requerido</span><br>
                        @enderror
                    </div>
                    <div class="input-group mt-2  w-75">
                        <div class="input-group-prepend">
                            <label style="font-size:13px;" class="input-group-text py-0" for="inputGroupSelect01">Lugar
                                de nacimiento</label>
                        </div>
                        <select class="custom-select py-0" style="font-size: 14px" id="inputGroupSelect01">
                            <option style="font-size: 12px;" selected></option>
                            <option style="font-size: 12px;" value="Masculino">Delta Amacuro(Tucupita)</option>
                            <option style="font-size: 12px;" value="Masculino">Caracas()</option>
                            <option style="font-size: 12px;" value="Masculino">Sucre()</option>
                            <option style="font-size: 12px;" value="Masculino">Bolivar()</option>
                            <option style="font-size: 12px;" value="Femenino">Zulia()</option>
                        </select>
                    </div>
            </div>
        </div>

        <div class="card" style="width: 26rem;">
            <div class="card-body d-flex flex-wrap">
                <div class="" style="width: 90%;">
                    <label style="font-size:13px;" for="">Foto de titulo de Bachiller</label>
                    <input style="font-size: 12px;" type="file" name="foto" class="input-group">
                    <label style="font-size:13px;" for="" class=" mt-5">Foto cedula de identidad</label>
                    <input style="font-size: 12px;" type="file" name="foto_cedula" class="input-group">
                </div>
            </div>
        </div>

        <div class="card" style="width: 34rem;">
            <div class="card-header py-1">
                <h5>Datos de vivienda</h5>
            </div>
            <div class="card-body d-flex flex-wrap">
                <div class="" style="width: 45%;">
                    <label style="font-size:13px;" for="">Parroquia</label>
                    <input style="font-size: 12px;" type="text" name="parroquia" class="input-group">
                    <label style="font-size:13px;" for="">Direccion</label>
                    <input style="font-size: 12px;" type="text" name="direccion" class="input-group">
                </div>
                <div class="ml-2" style="width: 45%;">
                    <label style="font-size:13px;" for="">Telefono de contacto</label>
                    <input style="font-size: 12px;" type="number" class="input-group" name="telefono">
                </div>
            </div>
        </div>

        <div class="card-footer pt-1 px-1" style="width: 26rem; margin-top:5%;">
            <div class="card-header bg-white py-1">
                <label style="font-size:13px;" for="">Opciones</label>
            </div>
            <div class="card-body d-block">
                <button type="submit" style="font-size: 14px;" class="btn btn-success w-25 mt-2 mx-2">Guardar</button>
                </form>
                <button style="font-size: 14px;" class="btn btn-warning w-25 mt-2 mx-2">Vaciar</button>
                <button style="font-size: 14px;" class="btn btn-danger  w-25 mt-2 mx-2">Cancelar</button>
            </div>
        </div>
    </main>
@stop
