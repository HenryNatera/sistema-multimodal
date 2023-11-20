@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px">Bienvenid@ </h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
    <div class="card w-75">
        <div class="card-body">
            <table class="table table-striped table-bordered" style="font-size: 13px;" id="students">
                <thead>
                    <tr>
                        <th class="py-2" >id</th>
                        <th class="py-2" >Nombre y Apellido</th>
                        <th class="py-2" >Cedula</th>
                        <th class="py-2" >PNF</th>
                        <th class="py-2" style="width: 40px;">Trayecto/Semestre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                            <tr>
                                <td class="py-1">{{$student->user->id}}</td>
                                <td class="py-1">{{$student->user->name}} {{$student->user->last_name}}</td>
                                <td class="py-1">{{$student->user->cedula}}</td>
                                <td class="py-1">{{$student->pnf->pnf_name}}</td>
                                <td class="py-1">{{$student->trayecto}}{{$student->semestre}}</td>
                            </tr>                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@stop
@section('js')
<script>
    new DataTable('#students',{
        "pageLength": 15,
        responsive: true,
        autoWidth: false
    });
</script>
@stop