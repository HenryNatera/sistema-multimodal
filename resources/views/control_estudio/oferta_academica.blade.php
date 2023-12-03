@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card">
            @if ($pnf->malla_tipo == 'trimestral')

                <div class="card-header">
                    <p>{{ $pnf->pnf_name }} Trayecto I Oferta academica:</p>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Unidad Curricular</th>
                                <th>UC</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trimestralmallas as $trim)
                                @if ($trim->pnf_id == $pnf->id && $trim->trayecto == 'i')
                                    <tr>
                                        <td>{{ $trim->id }}</td>
                                        <td>{{ $trim->unidad_curricular }}</td>
                                        <td>{{ $trim->uc_i }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer bg-white">
                        <form action="{{ route('control.student.trimestral.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                            <input type="hidden" value="{{ $user->cedula }}" name="student_cedula">
                            <input type="hidden" value="{{ $pnf->id }}" name="pnf_id">
                            <input type="hidden" value="i" name="trayecto">
                            <button type="submit" class="btn btn-success">Inscribir</button>
                        </form>
                    </div>
                </div>
            @endif

            @if ($pnf->malla_tipo == 'semestral')

                <div class="card-header">
                    <p>{{ $pnf->pnf_name }} Semestre I Oferta academica:</p>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Asignacion</th>
                                <th>UC</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semestralmallas as $sem)
                                @if ($sem->pnf_id == $pnf->id && $sem->semestre == 1)
                                    <tr>
                                        <td>{{ $sem->id }}</td>
                                        <td>{{ $sem->asignatura }}</td>
                                        <td>{{ $sem->uc }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer bg-white">
                        <form action="{{ route('control.student.semestral.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                            <input type="hidden" value="{{ $user->cedula }}" name="student_cedula">
                            <input type="hidden" value="{{ $pnf->id }}" name="pnf_id">
                            <button type="submit" class="btn btn-success">Inscribir</button>
                        </form>
                    </div>
                </div>
            @endif

        </div>
    </main>
@stop
