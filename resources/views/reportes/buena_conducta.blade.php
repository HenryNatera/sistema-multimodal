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
    
    <p>
        @if ($solicitud->user->genero == 'masculino')
            El estudiante
            
        @else
            La estudiante
        @endif
        <b>{{$solicitud->user->name}} {{$solicitud->user->last_name}}</b> se porto bien</p>
    
</body>
</html>
