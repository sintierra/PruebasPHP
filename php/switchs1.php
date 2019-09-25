<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switchs1</title>
</head>
<body>
    <?
    $numeroDia = 8;
    switch ($numeroDia) {
        case '1':
            echo 'Domingo';
            break;
        case '2':
            echo 'Lunes';
            break;
        case '3':
            echo 'Martes';
            break;
        case '4':
            echo 'Miercoles';
            break;    
        case '5':
            echo 'Jueves';
            break;    
        case '6':
            echo 'Viernes';
            break;
        case '7':
            echo 'Sabado';
            break;
        default:
            echo 'No es un día de la semana';
            break;
    }
    
    ?>

</body>
</html>