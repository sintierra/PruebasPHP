<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NumerosPrimos</title>
</head>
<body>
    <?
    
    
    for ($i=1; $i <= 50; $i++) { //hacemos un bucle para cada número del 1 al 50
        $numEval = $i;
        $contadorModulos = 0;
         for ($a=1; $a <= $numEval ; $a++) { //hacemos otro buche para sacar los módulos de todos los números desde $a hasta $i
            if ($numEval % $a == 0) { //si el módulo da 0
                 $contadorModulos++; //se post-incrementa la variable $contador
             }
             
         }

         if ($contadorModulos == 2) {   //fuera del buche se confirma que solo haya 2 valores en $contador, por lo tanto el numero es primo
             echo "$numEval es primo </br>"; //se imprime que $i es primo
         }  
    }
    
    
    
    ?>
</body>
</html>