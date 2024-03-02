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
        <div class="card w-75">
            <div class="card-header">
                <h5>Ofertas academicas periodo 2023-2024</h5>
            </div>
            <div class="card-body">
                <p style="font-size: 13px;">Seleccione la Acarrera/PNF al cual desea oinscribirse el estudiante</p>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PNF</th>
                            <th>Coordinador</th>
                            <th>Inscritos</th>
                            <th>Modalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pnfs as $pnf)
                            <tr>
                                @php
                                    $url = url('oferta_academica/' . $user->id . '/' . $pnf->id);
                                @endphp
                                <td class="py-1"><a class="text-dark" href="{{ $url }}">{{ $pnf->id }}</a>
                                </td>
                                <td class="py-1"><a class="text-dark" href="{{ $url }}">{{ $pnf->pnf_name }}</a>
                                </td>
                                <td class="py-1"><a class="text-dark" href="{{ $url }}">{{ $pnf->user->name }}
                                        {{ $pnf->user->last_name }}</a></td>
                                <td class="py-1"><a class="text-dark"
                                        href="{{ $url }}">{{ $student->where('pnf_id', $pnf->id)->count() }}</a>
                                </td>
                                <td class="py-1"><a class="text-dark"
                                        href="{{ $url }}">{{ $pnf->malla_tipo }}</a></td>
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
