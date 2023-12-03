@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card w-50">
            @foreach ($students as $student)
                @if ($student->user_id == Auth::user()->id)
                    <div class="card-header mb-0 pb-0">
                        <p>Solicitudes en Linea</p>


                        <p class="p-0 m-0">{{ $student->pnf->pnf_name }}</p>


                    </div>
                    <div class="pt-0">
                        <ul style="font-size: 12px;" class="list-group">
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="{{ route('student.solicitudes.constacias.show', $student) }}">Solicitud de
                                    constacias y certificaciones</a></li>
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="">Solicitud de reingreso</a></li>
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="">Solicitud de cambio de carrera</a></li>
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="">Solicitud de retiro de asignaturas</a></li>
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="">Solicitud de titulo</a></li>
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="">Solicitud de pasantias</a></li>
                            <li class="list-group-item py-1 " style="border:none;"><a style="color:#000;"
                                    href="">Solicitud de</a></li>
                        </ul>
                    </div>
                @endif
            @endforeach
        </div>
    </main>
@stop
