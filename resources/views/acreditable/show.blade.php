@extends('adminlte::page')

@section('title', 'UA')

@section('content_header')
    <h1 style="font-size: 20px">Unidades Acreditables </h1>
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
                            <th>Unidada Acreditable</th>
                            <th>Profesor</th>
                            <th>Modalidad</th>
                            <th>Turno</th>
                            <th>Estudiantes</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($acreditables as $acreditable)
                            <tr>
                                <td>{{ $acreditable->id }}</td>
                                <td>{{ $acreditable->acreditable_name }}</td>
                                <td style="text-transform: capitalize;">{{ $acreditable->acreditable_profesor }}</td>
                                <td style="text-transform: capitalize;">{{ $acreditable->acreditable_modalidad }}</td>
                                <td style="text-transform: capitalize;">{{ $acreditable->acreditable_turno }}</td>
                                <td style="text-align: center;">{{ $acreditable->acreditable_inscritos }}</td>
                                <td><a href="{{ route('acreditable.data', $acreditable) }}"
                                        class="btn btn-primary">Revisar</a></td>
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
        new DataTable('#acreditables', {
            responsive: true,
            autoWidth: false
        });
    </script>
@stop
