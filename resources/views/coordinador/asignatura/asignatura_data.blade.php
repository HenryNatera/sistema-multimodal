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
        <div class="card w-50">
            <div class="card-header">
                <h6 style="text-transform: uppercase"><b>{{ $regular->regular_name }}</b></h6>
                <p style="font-size: 12px; text-transform:uppercase;">Trayecto {{ $regular->regular_trayecto }} <b>-</b>
                    Trimestre {{ $regular->regular_trimestre }}</p>
            </div>
            <div class="card-body">
                <p style="font-size: 12px;">DOCENTE ASIGNADO:
                    @if ($regular->user_id == null)
                </p>
            @else
                <b>{{ $regular->user->name }} {{ $regular->user->last_name }}</b></p>
                @endif
            </div>
        </div>

        <div class="card w-75">
            <div class="card-body">
                <h6><b>Horas a la semana</b></h6>
            </div>
        </div>

        <div class="card w-75">
            <div class="card-footer d-flex py-2 justify-content-end">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#update">Actualizar</button>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <label for="">Docente</label>
            <input type="text" class="input-group">
            
            <input type="text" class="input-group">
            <input type="text" class="input-group">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
    </main>
@stop
