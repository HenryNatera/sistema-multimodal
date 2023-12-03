button@extends('adminlte::page')

@section('title', 'Asignaturas inscritas')

@section('content_header')
    <h1 style="font-size:20px;">{{ $regular->regular_name }}</h1>

@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>cedula</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($regularEvaluations as $re)
                        @if ($re->regular_id == $regular->id)
                            <tr>
                                <td>{{ $re->user->name }} {{ $re->user->last_name }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <form action="{{ route('regular.test.inscribir', $regular) }}" method="POST" class="card-body">
            @csrf
            <h5 class="">Agregar Estudiante</h5>
            <select name="user_id" id="">
                @foreach ($students as $estudiante)
                    <option value="{{ $estudiante->user->id }}">{{ $estudiante->user->name }}
                        {{ $estudiante->user->last_name }}</option>
                @endforeach
            </select>
            <input type="hidden" name="regular_id" value="{{ $regular->id }}">
            <button class="btn btn-success" type="submit">Agregar</button>
        </form>

    </div>
@stop
