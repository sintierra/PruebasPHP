<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores 2</title>
</head>
<body>
    <?
        $numero = -6;

        if ($numero >= 0) {
            if ($numero % 2 == 0) {
                echo "El numero $numero es par";

            }

            if ($numero % 2 == 1)
                echo "El numero $numero es impar";
        } 
        
        if($numero < 0) echo "no es entero positivo";
    ?>
</body>
</html>