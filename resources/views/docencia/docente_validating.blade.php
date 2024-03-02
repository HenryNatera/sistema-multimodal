@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span>
    </span>
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
    <h1 style="font-size: 19px" class="ml-5">Registro Docente: Perfil Docente</h1>
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card w-50 ml-5">
            <div class="card-body">
                <div class="w-100 d-flex flex-wrap">
                    <p style="font-size: 13px;" class="w-50">Nombres: <b style="text-transform: uppercase;">{{ $user->name }}</b></p>
                    <p style="font-size: 13px;" class="w-50">Apellidos: <b style="text-transform: uppercase;">{{ $user->last_name }}</b></p>
                    <p style="font-size: 13px;" class="w-50">Cedula: <b style="text-transform: uppercase;">{{ $user->cedula }}</b></p>
                    <p style="font-size: 13px;" class="w-25">Genero: @if ($user->genero == 1)
                            <b>M</b>
                        @else
                            <b>F</b>
                        @endif
                    </p>
                    <p style="font-size: 13px;" class="w-50">Telefono: </p>
                    <p style="font-size: 13px;" class="w-50">Correo:</p>
                </div>
                <form action="{{ route('docencia.professor.store', $user) }}" method="POST" style="display:flex; flex-wrap:wrap;" class="mt-5">
                    @csrf

                    <div class="w-75 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Titulo/Nivel de Instruccion</label>
                        <input type="text" name="p_t" class="input-group w-100"
                            placeholder="Ingenier@,Licenciad@,Mayister..." style="font-size: 13px;">
                    </div>
                    <div class="w-75 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Especialidad</label>
                        <input type="text" name="espe" class="input-group w-50" style="font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">PNF Recomendado</label>
                        <select name="p_r" id="" class="input-group w-50" style="font-size: 13px;">
                            @foreach ($pnfs as $pnf)
                                <option value="{{ $pnf->pnf_name }}">{{ $pnf->pnf_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Curriculum</label>
                        <input type="file" name="curri" class="input-group" accept="application/pdf" style="font-size: 13px;">
                    </div>
                    <div class="w-50 py-2 px-1">
                        <label for="" class="" style="font-size: 14px">Componente Docente</label>
                        <input type="file" name="c_d" class="input-group" accept="application/pdf" style="font-size: 13px;">
                    </div>
                    <div class="card-header p-1 d-flex justify-content-end w-100 mt-5">
                        <a href="" class="btn btn-danger mx-2" style="font-size: 13px;">Cancelar</a>
                        <button type="submit" class="btn btn-success" style="font-size: 13px;">Completar Validacion</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
