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

        <div class="card">
            <div class="card-header">
                <h4>Noticia Nueva</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('coordinador.noticia.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="input-group" name="titulo">
                    <input type="file" class="input-group" name="imagen" accept="image/*" id="image">
                    @error('imagen')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <img id="vistaPrevia" src="#" alt="Vista previa de la imagen" style="display: none;">
                    <textarea id="" cols="50" rows="8" style="max-height: 200px" name="description"></textarea>
                    <input class="btn btn-success" type="submit">
                </form>
            </div>
        </div>

    </main>
@stop
@section('js')
    <script>
        function mostrarVistaPrevia(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#vistaPrevia').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            mostrarVistaPrevia(this);
        });
    </script>
@stop
