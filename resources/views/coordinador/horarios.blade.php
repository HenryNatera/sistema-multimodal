@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px">Bienvenid@ </h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
    <div class="card mt-5 w-75" style="margin: 0 auto 7%;">
        <div class="card-header">
            <h5>Informatica Trayecto I</h5>
        </div>
            
            <table class="table table-bordered table-responsive w-100">
                <thead>
                    <tr style="text-align: center;">
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($regular_horarios as $rh)
                        <tr style="text-align: center;">
                            @if ($rh->dia == 1 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'i')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 2 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'i')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 3 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'i')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 4 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'i')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 5 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'i')
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
    </div>

    <div class="card mt-5 w-75" style="margin: 0 auto 7%;">
        <div class="card-header">
            <h5>Informatica Trayecto II</h5>
        </div>
            
            <table class="table table-bordered table-responsive w-100">
                <thead>
                    <tr style="text-align: center;">
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($regular_horarios as $rh)
                        <tr style="text-align: center;">
                            @if ($rh->dia == 1 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'ii')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 2 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'ii')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 3 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'ii')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 4 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'ii')                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif

                            @if ($rh->dia == 5 && $rh->pnf->user_id == Auth::user()->id && $rh->trayecto == 'ii')
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                                
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
    </div>

</main>
@stop
