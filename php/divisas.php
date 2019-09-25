<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divisas</title>
</head>
<body>
    <?
    //equivalencia $USD 1 = 58 $ARS

 for ($cambio=0; $cambio <= 10 ; $cambio++) { 
     $valor = $cambio * 58;
     echo "$cambio dolares son $valor pesos argentinos </br>";
 }
    
    ?>
</body>
</html>