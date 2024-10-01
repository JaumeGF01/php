<?php
    $x = $_GET["x"];
    $y = $_GET["y"];
    $suma = $x + $y;
    $resta = $x - $y;
    $div = $x / $y;
    $multi = $x * $y;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table{
            text-align: center;
            width: 30vh;
            margin: auto;
        }
    </style>
</head>
<body>
    <?=
    "<table class='table table-dark table-striped-columns'>
    <tr class='table-success'>
        <th>Valores</th>
        <th>x=$x y=$y</th>
    </tr>
    <tr>
        <td>Suma</td>
        <td>$suma</td>
    </tr>
    <tr>
        <td>Resta</td>
        <td>$resta</td>
    </tr>
    <tr>
        <td>Multiplicación</td>
        <td>$multi</td>
    </tr>
    <tr>
        <td>Division</td>
        <td>$div</td>
    </tr>
    </table>"
    ?>
</body>
</html>