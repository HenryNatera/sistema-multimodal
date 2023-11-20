@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px"></h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/input_number.css">
    <style>
        input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    </style>
@stop

@section('content')

<main style="display: flex; flex-wrap:wrap; justify-content:space-around;">
@foreach ($periodo as $p)
    <div class="w-50 px-5">
        <div class="card">
                
                <div class="card-header">
                    <h5 style="text-transform:Capitalize;">{{$regular->regular_name}} {{$regular->regular_trayecto}}</h5>
                </div>
                <div class="card-body">
                    <p>{{$regular->pnf->pnf_name}}</p>
                    <p>Estudiantes inscritos: <b>{{$re->where('regular_id', $regular->id)->count()}}</b></p>
                
                </div>

        </div>

        <div class="card">
                <div class="card-header">
                    <h5>Plan de evaluacion</h5>
                </div>
                <div class="card-body">
                    <p><b>25%</b>: Taller</p>
                    <p><b>25%</b>: Examen</p>
                    <p><b>25%</b>: Exposicion</p>
                    <p><b>25%</b>: Examen</p>
                </div>
        </div>
    </div>

   <div class="card w-50 px-5">
        <div class="card-header mb-3 py-2 d-flex">
            <h5 class="py-0 m-0">Enlaces para clases virtuales</h5>
        </div>
        <div class="card-header m-0 py-2 d-flex">
            <h6 class="py-0 m-0">Url de la classroom</h6>
            <a href="#" style="font-size: 12px;" class="btn btn-outline-secondary px-1 py-0 mx-4 ">Actualizar</a>
        </div>
        <div class="card-body m-0 py-0">
            <a class="text-info p-0 m-0" href="https://classroom.google.com/">https://classroom.google.com/</a>
        </div>
        <div class="card-header m-0 py-2 d-flex">
            <h6 class="py-0 m-0">Url Reunion via Google Meet</h6>
            <a href="#" style="font-size: 12px;" class="btn btn-outline-secondary px-1 py-0 mx-4 ">Actualizar</a>
        </div>
        <div class="card-body m-0 py-0">
            <a class="text-info p-0 m-0" href="https://classroom.google.com/">https://classroom.google.com/</a>
        </div>
        <div class="card-header m-0 py-2 d-flex">
            <h6 class="py-0 m-0">Url Reunion via Zoom</h6>
            <a href="#" style="font-size: 12px;" class="btn btn-outline-secondary px-1 py-0 mx-4 ">Actualizar</a>
        </div>
        <div class="card-body m-0 py-0">
            <a class="text-info p-0 m-0" href="https://classroom.google.com/">https://classroom.google.com/</a>
        </div>
        <div class="card-header m-0 py-2 d-flex">
            <h6 class="py-0 m-0">Otro Medio</h6>
            <a href="#" style="font-size: 12px;" class="btn btn-outline-secondary px-1 py-0 mx-4 ">Actualizar</a>
        </div>
        <div class="card-body m-0 py-0">
            <a class="text-info p-0 m-0" href="https://classroom.google.com/">https://classroom.google.com/</a>
        </div>
   </div>
   


   <div class="card w-75 my-5">
        <div class="card-body">
            
            <table class="table" style="font-size: 13px;">
                <thead>
                    <tr>
                        <th>Nombre y Apellido</th>
                        <th>Cedula</th>
                        <th>25%</th>
                        <th>25%</th>
                        <th>25%</th>
                        <th>25%</th>
                        <th>Final</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($regular_evaluations as $r_e)
                   <form action="{{route('professor.evaluation.update', $r_e)}}" method="POST">
                    @csrf @method('PATCH')
                    @if ($r_e->regular_id == $regular->id)
                        
                       <tr>
                        <td>{{$r_e->user->name}} {{$r_e->user->last_name}}</td>
                        <td>{{$r_e->user->cedula}}</td>
                        <input type="hidden" name="user_id" value="{{$r_e->user_id}}">
                        <input type="hidden" name="regular_id" value="{{$regular->id}}">
                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_i" value="{{old('unidad_i', $r_e->unidad_i)}}"></td>
                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_ii" value="{{old('unidad_ii', $r_e->unidad_ii)}}"></td>
                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_iii" value="{{old('unidad_iii', $r_e->unidad_ii)}}"></td>
                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_iv" value="{{old('unidad_iv', $r_e->unidad_iv)}}"></td>
                        <td class="py-1">{{($r_e->unidad_i+$r_e->unidad_ii+$r_e->unidad_iii+$r_e->unidad_iv)/4}}</td>
                        <td class="py-1"><button style="font-size: 13px;" type="submit" class="btn p-0 btn-primary">Cargar Notas</button></td>
                       </tr>
                    @endif
                    </form>
                   @endforeach
                </tbody>
            </table>

        </div>
   </div>
   
@endforeach
</main>
@stop
