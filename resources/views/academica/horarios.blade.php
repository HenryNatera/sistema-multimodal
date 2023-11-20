@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px">Horarios</h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
    <div class="card mt-5" style="margin: 0 auto 7%;">
        <div class="card-body">
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
                            @if ($rh->dia == 1)                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                              
                                  <td>
                                    <p></p>
                                  </td>                                
                            @endif

                            @if ($rh->dia == 2)                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                              
                                  <td>
                                    <p></p>
                                  </td>                                
                            @endif

                            @if ($rh->dia == 3)                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                              
                                  <td>
                                    <p></p>
                                  </td>                                
                            @endif

                            @if ($rh->dia == 4)                                
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                              
                                  <td>
                                    <p></p>
                                  </td>                                
                            @endif

                            @if ($rh->dia == 5)
                                <td>
                                    <p class="my-0" style="font-size:13px;">{{$rh->regular_name}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_entrada}}</p>    
                                    <p class="my-0" style="font-size:13px;">{{$rh->hora_salida}}</p>    
                                </td>                                
                                @else                              
                                  <td>
                                    <p></p>
                                  </td>                                
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</main>
@stop
