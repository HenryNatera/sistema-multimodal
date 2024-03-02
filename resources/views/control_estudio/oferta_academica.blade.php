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


                <div class="card-body" style="font-size: 14px;">
                    <table class="table">
                        <thead>
                            <tr class="py-1">
                                <th>ID</th>
                                <th>Unidad Curricular</th>
                                <th>UC</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px;">
                            @foreach ($trimestralmallas as $trim)
                                @if ($trim->pnf_id == $pnf->id && $trim->trayecto == 'i')
                                    <tr class="py-1">
                                        <td class="py-1">{{ $trim->id }}</td>
                                        <td class="py-1">{{ $trim->unidad_curricular }}</td>
                                        <td class="py-1">{{ $trim->uc_i }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer bg-white">
                        <form action="{{ route('control.student.trimestral.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="malla" value="{{ $pnf->malla }}">
                            <div class="card-header p-0 mb-2">
                                <label for="">Turno</label>
                                <select name="turn" id="">
                                    <option value="1">Mañana</option>
                                    <option value="0">Tarde</option>
                                </select>
                            </div>
                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                            <input type="hidden" value="{{ $user->cedula }}" name="student_cedula">
                            <input type="hidden" value="{{ $pnf->id }}" name="pnf_id">
                            <input type="hidden" value="i" name="trayecto">
                            <button type="submit" class="py-1 btn btn-success">Inscribir</button>
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
                            <tr class="py-1">
                                <th>ID</th>
                                <th>Asignacion</th>
                                <th>UC</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semestralmallas as $sem)
                                @if ($sem->pnf_id == $pnf->id && $sem->semestre == 1)
                                    <tr class="py-1">
                                        <td class="py-1">{{ $sem->id }}</td>
                                        <td class="py-1">{{ $sem->asignatura }}</td>
                                        <td class="py-1">{{ $sem->uc }}</td>
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
                            <button type="submit" class="py-2 btn btn-success">Inscribir</button>
                        </form>
                    </div>
                </div>
            @endif

        </div>
    </main>
@stop

@section('js')
    <script>
        document.oncontextmenu = function() {
            return false
        }
        // Deshabilitar el menú contextual
        window.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Deshabilitar la tecla F12
        window.addEventListener('keydown', function(e) {
            if (e.key === 'F12') {
                e.preventDefault();
            }
        });

        // Deshabilitar la tecla Ctrl
        window.addEventListener('keydown', function(e) {
            if (e.ctrlKey) {
                e.preventDefault();
            }
        });
    </script>
@stop
