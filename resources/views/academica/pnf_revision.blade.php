@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px">{{$pnf->pnf_name}}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
    <div class="card ml-5 w-25">
        <div class="card-header">
            <h6><b>Profesor: </b>{{$profesor->user->name}} {{$profesor->user->last_name}}</h6>
        </div>
    </div>

    <div class="card ml-5" style="width: 85%;">
        <div class="card-header">
            <h5>Trayecto I</h5>
        </div>
        <!--============== TRIMESTRE 1 ========================-->
        <div class="card-header">
            <h6><b>Trimestre I</b></h6>
        </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Unidad Curricular</th>
                        <th style="width: 30px">Horas</th>
                        <th>UC</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trimestrals as $trim)
                        @if ($trim->pnf_id == $pnf->id && $trim->trayecto == 'i')
                            <tr>
                                @php
                                    $url = url('utdft/academica/horario/'.$profesor->id.'/'.$pnf->id.'/'.$trim->id);
                                @endphp
                                <td><a class="text-dark" href="{{$url}}">{{$trim->unidad_curricular}}: {{$trim->trimestre_i}}</a></td>
                                <td style="text-align: center;">2</td>
                                <td>{{$trim->uc_i}}</td>
                            </tr>
                        @endif
                    
                    @endforeach
                </tbody>
            </table>
             
        <!--============== TRIMESTRE 2 ========================-->
        <div class="card-header">
            <h6><b>Trimestre II</b></h6>
        </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Unidad Curricular</th>
                        <th style="width: 30px">Horas</th>
                        <th>UC</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trimestrals as $trim)
                        @if ($trim->pnf_id == $pnf->id && $trim->trayecto == 'i')
                            <tr>
                                <td><a class="text-dark" href="">{{$trim->unidad_curricular}}: {{$trim->trimestre_ii}}</a></td>
                                <td style="text-align: center;">2</td>
                                <td>{{$trim->uc_ii}}</td>
                            </tr>
                        @endif
                    
                    @endforeach
                </tbody>
            </table>
        
        <!--============== TRIMESTRE 3 ========================-->
        <div class="card-header">
            <h6><b>Trimestre III</b></h6>
        </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Unidad Curricular</th>
                        <th style="width: 30px">Horas</th>
                        <th>UC</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trimestrals as $trim)
                        @if ($trim->pnf_id == $pnf->id && $trim->trayecto == 'i')
                            <tr>
                                <td><a class="text-dark" href="">{{$trim->unidad_curricular}}: {{$trim->trimestre_iii}}</a></td>
                                <td style="text-align: center;">2</td>
                                <td>{{$trim->uc_iii}}</td>
                            </tr>
                        @endif
                    
                    @endforeach
                </tbody>
            </table>
        
    </div>

    <div class="card" style="width: 45%;">
        <div class="card-header">
            <h5>Trayecto II</h5>
        </div>
        <div class="card-body">

        </div>
    </div>

    <div class="card" style="width: 45%;">
        <div class="card-header">
            <h5>Trayecto II</h5>
        </div>
        <div class="card-body">

        </div>
    </div>

    <div class="card" style="width: 45%;">
        <div class="card-header">
            <h5>Trayecto IV</h5>
        </div>
        <div class="card-body">

        </div>
    </div>
    
</main>
@stop
