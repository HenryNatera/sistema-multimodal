@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px"></h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/input_number.css">
@stop

@section('content')
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<main style="display: flex; flex-wrap:wrap; justify-content:space-around;">
    <div class="w-50 px-5">
        <div class="card">
                <div class="card-header">
                    <h5 style="text-transform:Capitalize;">{{$regular->regular_name}} {{$regular->regular_trayecto}}</h5>
                </div>
                <div class="card-body">
                    <p>{{$regular->pnf->pnf_name}}</p>
                    <p>Estudiantes inscritos: <b>25</b></p>
                
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
           
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre y Apellido</th>
                        <th>Cedula</th>
                        <th>25%</th>
                        <th>25%</th>
                        <th>25%</th>
                        <th>25%</th>
                        <th>Final</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($regular_evaluations as $r_e)
                       <tr>
                        <td>{{$r_e->user->name}} {{$r_e->user->last_name}}</td>
                        <td>{{$r_e->user->cedula}}</td>
                        <form action="{{route('professor.evaluation.update', $r_e)}}" method="POST">
                            @csrf @method('PATCH')
                            <input type="hidden" name="regular_id" value="{{$regular->id}}">
                        <td><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_i" value="{{old('unidad_i', $r_e->unidad_i)}}"></td>
                        <td><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_ii" value="{{old('unidad_ii', $r_e->unidad_ii)}}"></td>
                        <td><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_iii" value="{{old('unidad_iii', $r_e->unidad_ii)}}"></td>
                        <td><input style="width: 30px; outline:none; text-align:center;" type="number" name="unidad_iv" value="{{old('unidad_iv', $r_e->unidad_iv)}}"></td>
                        <td>%</td>
                        <td><input type="submit" placeholder="Cargar"></td>
                    </form>
                    
                       </tr>
                   @endforeach
                </tbody>
            </table>

        </div>
   </div>
   
</main>
@stop
