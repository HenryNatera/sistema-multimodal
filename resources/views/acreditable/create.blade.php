@extends('adminlte::page')

@section('title', 'UA')

@section('content_header')
    <div></div>
    <div></div>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
@stop

@section('content')
<main class="d-flex justify-content-center">
    <div class="card w-75">
        <div class=" bg-warning"><p class="h4 font-weight-light py-1 text-white text-center">Registro de Unidad Acreditable</p></div>

        <div class="card-body p-0 mt-3">
            
            <form action="{{route('acreditable.store')}}" method="POST">
                @csrf
                <div class="mx-3 my-4">
                    <p class="text-monospace m-0 text-black-50">Nombre</p>
                    <input name="acreditable_name" type="text" class="border-top-0 border-left-0 border-right-0 border-secondary w-75" style="outline: none; border-width:1px; color:#777;">
                </div>
                
                <div class="mx-3 my-4">
                    <p class="w-25 text-monospace m-0 text-black-50">Turno</p>
                    <select  name="acreditable_turno" id="" style="outline: none;">     
                        <option class="dropdown-item" value="mañana">Mañana</option>
                        <option class="dropdown-item" value="tarde">Tarde</option>
                    </select>
                </div>
                
                <div class="mx-3 my-4">   
                    <p class="text-monospace m-0 text-black-50">Modalidad</p>
                    <select  name="acreditable_modalidad" id="" style="outline: none;">     
                        <option class="dropdown-item" value="presencial">Presencial</option>
                        <option class="dropdown-item" value="mixta">Mixta</option>
                    </select>   
                </div>
                
                <div class="mx-3 my-4">
                    <p class="text-monospace m-0 text-black-50">Profesor a asignar</p>
                    <input list="professors" name="acreditable_profesor" class="border-top-0 border-left-0 border-right-0 border-secondary w-50" style="outline: none; border-width:1px; color:#777;">
                    <datalist id="professors">
                        @foreach ($professors as $professor)
                            <option value="{{$professor->user->name}} {{$professor->user->last_name}}">{{$professor->user->name}} {{$professor->user->last_name}}</option>
                        @endforeach
                    </datalist>

                </div>

                <div class="px-4 py-3 d-flex mt-3 justify-content-end">
                    <button type="submit" class="btn bg-success mx-2">Confirmar</button>
                    <button class="btn bg-danger">Cancelar</button>
                </div>
            </form>

        </div>
</div>
</main>


@stop

