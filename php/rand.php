<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
</head>
<body>
    <? 
    $num = rand(1,500);
        if ($num <= 10) {
            echo "El número tiene 1 dígito";
        } else {
            if ($num <= 100) {
                echo "El número tiene 2 dígitos";
            } else {
                echo "el número tiene 3 digitos";
            }
        }
    ?>
</body>
</html>