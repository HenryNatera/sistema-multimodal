<!DOCTYPE html>
<html lang="es">

<head>
    <style>
        @page {
            padding: 0;
            margin: 0 2.5cm;

        }

     
        p {
            font-family: 'Arial';
            font-size: 12px;
        }

        h1 {
            widows: 100%;
            text-align: center;
            font-size: 20px;
            font-family: 'Arial';
            margin: 2% 0 3%;
        }

        .header {
            border: 1px solid #000;
            width: 96%;
            margin: 0 auto 3%;
            display: flex;
            padding: 5px 20px;
            flex-wrap: wrap;
            background: #343A40;
        }

        .div1 {
            widows: 30%;
            margin-right: 30px;
        }

        .div1 p,
        .div2 p {
            font-size: 11px;
            color: #fff;
            text-transform: uppercase
        }

        .records {
            border: 1px solid #000;
            margin: 0 auto 3%;
            font-family: 'Arial';

            width: 99%;

        }

        table {
            width: 100%;
            font-size: 10px;
            font-family: 'Arial';
            border-collapse: collapse;
            border-spacing: 0;
        }

        table th {
            border: 1px solid #000;
        }

        table td{
            border: 0.5px solid #000;
        }


        .tr_t {
            width: 100%;
        }

        .trayecto {
            font-size: 11px;
            background: #343A40;
            width: 100%;
            color: #fff;
            margin: 0;
            text-align: center;

        }

        .code {
            width: 5%;
        }

        .tra {
            width: 2%;
        }

        .nota {
            width: 3%;
        }
    </style>

</head>

<body>

    <h1>HISTROIAL ACADEMICO</h1>

    @foreach ($student as $s)
        <div class="header">
            <div class="div1">
                <p>APELLIDOS Y NOMBRES: <br>
                    <b>{{ $s->user->name }} {{ $s->user->last_name }}</b>
                </p>
                <p>CEDULA DE IDENTIDAD: <b>{{ $s->user->cedula }}</b></p>
            </div>

            <div class="div2">
                <p><b>PNF {{ $s->pnf->pnf_name }}</b></p>
                
                <p><b>TRAYECTO {{ $s->trayecto }}</b></p>
            </div>
        </div>


        <div class="records">
            @if ($s->pnf->malla_tipo == 'trimestral')
                    
            <h6 class="trayecto">TRAYECTO 1</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th class="code">Codigo</th>
                        <th>Asignatura</th>
                        <th class="tra">TRA</th>
                        <th class="tra">tri</th>
                        <th class="tra">uc</th>
                        <th class="nota">nota</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($s->trayecto >= 2)
                        
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 1 && $re->regular->regular_trimestre == 1)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 1 && $re->regular->regular_trimestre == 2)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 1 && $re->regular->regular_trimestre == 3)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    @endif

                </tbody>
            </table>
            @endif

        </div>

        <div class="records">
            @if ($s->pnf->malla_tipo == 'trimestral')
                    
            <h6 class="trayecto">TRAYECTO 2</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th class="code">Codigo</th>
                        <th>Asignatura</th>
                        <th class="tra">TRA</th>
                        <th class="tra">tri</th>
                        <th class="tra">uc</th>
                        <th class="nota">nota</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($s->trayecto >= 2)
                        
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 2 && $re->regular->regular_trimestre == 1)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 2 && $re->regular->regular_trimestre == 2)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 2 && $re->regular->regular_trimestre == 3)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    @endif

                </tbody>
            </table>
            @endif

        </div>

        <div class="records">
            @if ($s->pnf->malla_tipo == 'trimestral')
                    
            <h6 class="trayecto">TRAYECTO 3</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th class="code">Codigo</th>
                        <th>Asignatura</th>
                        <th class="tra">TRA</th>
                        <th class="tra">tri</th>
                        <th class="tra">uc</th>
                        <th class="nota">nota</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($s->trayecto >= 2)
                        
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 3 && $re->regular->regular_trimestre == 1)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 3 && $re->regular->regular_trimestre == 2)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 3 && $re->regular->regular_trimestre == 3)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    @endif

                </tbody>
            </table>
            @endif

        </div>

        <div class="records">
            @if ($s->pnf->malla_tipo == 'trimestral')
                    
            <h6 class="trayecto">TRAYECTO 4</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th class="code">Codigo</th>
                        <th>Asignatura</th>
                        <th class="tra">TRA</th>
                        <th class="tra">tri</th>
                        <th class="tra">uc</th>
                        <th class="nota">nota</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($s->trayecto >= 4)
                        
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 4 && $re->regular->regular_trimestre == 1)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 4 && $re->regular->regular_trimestre == 2)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="border: 2px solid #000"></tr>
                    @foreach ($res as $re)
                        @if ($s->malla == $re->regular->malla && $s->pnf->id == $re->regular->pnf_id && $re->regular->regular_trayecto == 4 && $re->regular->regular_trimestre == 3)
                            <tr>
                                <td></td>
                                <td>{{$re->regular->regular_name}}</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"></td>
                                @php
                                    $nota =  ($re->unidad_i + $re->unidad_ii + $re->unidad_iii + $re->unidad_iv) / 4 ;
                                    $color= 'transparent';
                                    if($nota == 0){
                                        $nota = "";
                                    }
                                    if($nota < 12 && $nota != ""){
                                        $color = '#FFFF00';
                                    }
                                @endphp
                                <td style="text-align: center; background:{{$color}};">{{$nota}}</td>
                            </tr>
                        @endif
                    @endforeach
                    @endif

                </tbody>
            </table>
            @endif

        </div>


    @endforeach


</body>

</html>
