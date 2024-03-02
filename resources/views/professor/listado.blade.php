@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 style="font-size: 20px">Bienvenid@ </h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
    <main style="display: flex; flex-wrap:wrap; justify-content:space-between">
        <div class="card w-75 my-5">
            <div class="card-body">

                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>25%</th>
                            <th>25%</th>
                            <th>25%</th>
                            <th>25%</th>
                            <th>Final</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regular_evaluations as $r_e)
                            <form action="{{ route('professor.evaluation.update', $r_e) }}" method="POST">
                                @csrf @method('PATCH')
                                @if ($r_e->regular_id == $regular->id)
                                    <tr>
                                        <td>{{ $r_e->user->name }} {{ $r_e->user->last_name }}</td>
                                        <td>{{ $r_e->user->cedula }}</td>
                                        <input type="hidden" name="user_id" value="{{ $r_e->user_id }}">
                                        <input type="hidden" name="regular_id" value="{{ $regular->id }}">
                                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;"
                                                type="number" name="unidad_i"
                                                value="{{ old('unidad_i', $r_e->unidad_i) }}"></td>
                                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;"
                                                type="number" name="unidad_ii"
                                                value="{{ old('unidad_ii', $r_e->unidad_ii) }}"></td>
                                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;"
                                                type="number" name="unidad_iii"
                                                value="{{ old('unidad_iii', $r_e->unidad_ii) }}"></td>
                                        <td class="py-1"><input style="width: 30px; outline:none; text-align:center;"
                                                type="number" name="unidad_iv"
                                                value="{{ old('unidad_iv', $r_e->unidad_iv) }}"></td>
                                        <td class="py-1">
                                            {{ ($r_e->unidad_i + $r_e->unidad_ii + $r_e->unidad_iii + $r_e->unidad_iv) / 4 }}
                                        </td>
                                        <td class="py-1"><button style="font-size: 13px;" type="submit"
                                                class="btn p-0 btn-primary">Cargar Notas</button></td>
                                    </tr>
                                @endif
                            </form>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main>
@stop
