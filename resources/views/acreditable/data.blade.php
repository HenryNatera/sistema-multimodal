@extends('adminlte::page')

@section('title', 'UC')

@section('content_header')
    <h1  style="font-size: 20px">{{$acreditable->acreditable_name}} </h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
@stop

@section('content')
<main>
    <div class="card">
        <div class="card-body">
    <table id="acreditables" class="table  table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estudiante</th>
                <th>PNF</th>
                <th>Trayecto</th>
                <th>Calificacion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acreditableEvaluations as $av)
            @foreach ($students as $student)
            @if ($av->user->id == $student->user->id && $av->acreditable_id == $acreditable->id)
                
            <tr>
                <td>{{$av->user->id}}</td>
                <td>{{$av->user->name}} {{$av->user->last_name}}</td>
                <td>{{$student->pnf}}</td>
                    
                <td>{{$student->trayecto}}</td>
                <td>{{$av->calificacion}}</td>

                <td><a href="{{route('acreditable.data', $acreditable)}}" class="btn btn-primary">Revisar</a></td>
            </tr>
            @endif            

            @endforeach
            
            @endforeach
        </tbody>
    </table>
</div>
</div>

<div class="card">
     <form action="{{route('acreditable.inscribir')}}" method="POST" class="card-body">
        @csrf
        <h5 class="">Agregar Estudiante</h5>
        <select name="student_id" id="">
            @foreach ($students as $estudiante)
                <option value="{{$estudiante->user->id}}">{{$estudiante->user->name}} {{$estudiante->user->last_name}}</option>
            @endforeach
        </select>
        <input type="hidden" name="acreditable_id" value="{{$acreditable->id}}">
        <button class="btn btn-success" type="submit">Agregar</button>
     </form>

</div>
</main>


@stop

@section('js')
<script>
    new DataTable('#acreditables',{
        responsive: true,
        autoWidth: false
    });
</script>
@stop
