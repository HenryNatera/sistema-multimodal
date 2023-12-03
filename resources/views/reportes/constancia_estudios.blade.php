<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        @page {
            padding: 0;
            margin: 0 2.5cm;
    
        }

        p{
            font-family: 'Arial';
            font-size: 12px;
        }
        
    </style>
    
</head>

<body>
    <p style="text-align: cenetr;"><b>Universidad Territorial Deltaica Francisco Tamayo</b></p>
    <p><B>PNF: {{$solicitud->pnf->pnf_name}}</B></p>
    <p>Se hace constancia de que 
        @if ($solicitud->user->genero == 'masculino')
        el estudiante
        
    @else
        la estudiante
    @endif <b>{{$solicitud->user->name}} {{$solicitud->user->last_name}}, </b>cedula de identidad <b>{{$solicitud->user->cedula}}</b> estudia aqui</p>
    <br>
    <br>
    <br>
    <p><b>Coordinador: </b> {{$solicitud->pnf->user->name}} {{$solicitud->pnf->user->last_name}}</p>
    
</body>
</html>
