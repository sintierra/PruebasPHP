<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MayorMenor</title>
</head>
<body>
    <?
    $a = 3;
    $b = 2;
    $c = 10;

    if ($a > $b) {
        $mayor = 'a';
        $menor = 'b';

        if ($b > $c) {
            $menor = 'c';
        }

        if ($c > $a) {
            $mayor = 'c';
        }
    } else
        $mayor = 'b';
        $menor = 'a';

        if ($b > $c) {
            $menor = 'c';
        }

        if ($c > $a) {
            $mayor = 'c';
        }
    echo 'la mayor es '.$mayor.' <br>';
    echo 'la menor es '.$menor.' <br>';
    ?>
</body>
</html>