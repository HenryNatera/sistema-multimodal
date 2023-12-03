@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span class="m-0"></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between; align-items: flex-start;">
        <div class="card w-50 ml-5">
            <div class="card-header">
                <p>Solicitud de Constancias y/o Certificaciones
                </p>
            </div>
            <table style="font-size:13px;" class="table" id="solicitudes">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Solicitud</th>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $solicitud)
                        @if ($solicitud->user_id == Auth::user()->id)
                            <tr>
                                <td>{{ $solicitud->id }}</td>
                                <td>{{ $solicitud->solicitud_tipo }}</td>
                                <td>{{ $solicitud->created_at }}</td>
                                <td>{{ $solicitud->solicitud_status }}</td>
                                <td><a target="_blank"
                                        href="{{ route($solicitud->solicitud_view, $solicitud) }}">Imprimir</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card ml-5" style="width: 40%">
            <div class="card-header">
                <p>Nueva solicitud</p>
            </div>
            <ul class="list-group" style="font-size:13px;">
                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Constancia de Buena conducta">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.buena.conducta">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Constancia de Buena
                            conducta</button></li>
                </form>

                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Constancia de Estudios">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.constancia.estudios">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Constancia de Estudios</button>
                    </li>
                </form>

                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Comprobante de Inscripción">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.comprobante.inscripcion">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Comprobante de Inscripción
                            (Horario)</button></li>
                </form>

                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Certificación de Calificaciones">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.certificacion.calificaciones">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Certificación de
                            Calificaciones (Regulares)</button></li>
                </form>

                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Record Académico">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.record.academico">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Record Académico</button></li>
                </form>

                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Historial Académico">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.historial.academico">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Historial Académico</button>
                    </li>
                </form>

                <form action="{{ route('student.solicitud.store', $student) }}" method="POST">
                    @csrf
                    <input type="hidden" name="solicitud_tipo" value="Constancia de Culminación de carrera">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="pnf_id" value="{{ $student->pnf->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="solicitud_view" value="solicitud.culminacion.carrera">
                    <input type="hidden" name="solicitud_status" value="pendiente">
                    <li class="list-group-item py-1" style="border:none;"><button type="submit"
                            class="list-group-item p-0 m-0" style="border:none; color:#000">Constancia de Culminación de
                            carrera</button></li>
                </form>

            </ul>
        </div>
    </main>
@stop
@section('js')
    <script>
        new DataTable('#solicitudes', {
            "pageLength": 5,
            responsive: true,
            autoWidth: false
        });
    </script>
@stop
