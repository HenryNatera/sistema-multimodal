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
    <h1 style="font-size: 19px" class="ml-5">Registro Docente: Personal sin validar</h1>
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card w-75">
            <div class="card-body">
                <table style="font-size: 13px;" class="table" id="professors">
                    <thead>
                        <tr>
                            <th class="py-1">ID</th>
                            <th class="py-1">Nombre</th>
                            <th class="py-1">Cedula</th>
                            <th class="py-1">Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="py-0"><a class="text-dark" href="{{ route('docencia.professor.validating', $user) }}">{{ $user->id }}</a>
                                </td>
                                <td class="py-0"><a class="text-dark" href="{{ route('docencia.professor.validating', $user) }}">{{ $user->name }}
                                        {{ $user->last_name }}</a></td>
                                <td class="py-0"><a class="text-dark" href="{{ route('docencia.professor.validating', $user) }}">{{ $user->cedula }}</a>
                                </td>
                                <td class="py-0"><a class="text-dark" href="{{ route('docencia.professor.validating', $user) }}">Pendiente</a></td>
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
        new DataTable('#professors', {
            "pageLength": 10,
            responsive: true,
            autoWidth: false
        });
    </script>
@stop
