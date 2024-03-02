@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        @foreach ($students as $student)
            <h5 style="width: 100%;">{{ $student->pnf->pnf_name }} Trayecto {{ $student->trayecto }}</h5>
            <h5 style="width: 100%;"><b>Turno: </b>
                @if ($student->turno == 0)
                    Mañana
                @else
                    Tarde
                @endif
            </h5>
            @if ($student->pnf->malla_tipo == 'trimestral')
                @if ($student->confirm == 0)
                    <div class="card" style="width: 45rem;">
                        <p>Selecciones las unidades curriculares a inscribir</p>
                        <form action="{{ route('student.regular.store', $student) }}" method="POST">
                            @csrf
                            <table class="table" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Unidad Curricular</th>
                                        <th>Trimestre</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regulares as $regular)
                                        @if ($regular->regular_trayecto == $student->trayecto)
                                            <tr>
                                                <td class="py-1">{{ $regular->regular_name }}</td>
                                                <td class="py-1">{{ $regular->regular_trimestre }}</td>
                                                <td class="py-1">
                                                    <input type="hidden" name="regular_id[]" value="{{ $regular->id }}">
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </form>

                    </div>
                @else
                    <div class="card w-50">
                        <div class="card-body">
                            <p>No tiene ninguna asignatura por inscribir </p>
                            <p> Para alguna modificacion consulte con Control de estudio</p>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </main>
@stop
