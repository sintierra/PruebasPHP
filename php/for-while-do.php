<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ForWhileDo</title>
</head>
<body>

    <?
      $multiplicador = 2;
        for ($f=1; $f <= 10 ; $f++) { 
          echo "$multiplicador por $f es igual a ".$f*$multiplicador."<br>";
      }
     
       $a = 1;
        while ($a <= 10) {
        echo "$multiplicador por $a es igual a ".$a*$multiplicador."<br>";
        $a++;
        }
    

      $b = 1;
        do {
        echo "$multiplicador por $b es igual a ".$b*$multiplicador."<br>";
        $b++;
        } while ($b <= 10);
    
 
    ?>
</body>
</html>