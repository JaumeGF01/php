<?php
    //print_r($_GET);
    $x = $_GET["x"];
    $y = $_GET["y"];
    $suma = $x + $y;
    $resta = $x - $y;
    $div = $x / $y;
    $multi = $x * $y;

    //echo "Suma: $suma Resta: $resta Multiplicación: $multi División: $div";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border-collapse:collapse;
            border: 1px solid black;
            padding: 3px;
        }
        table{
            margin:auto;
        }
        
    </style>
</head>
<body>
    <?=
    "<table>
    <tr>
        <td>Suma</td>
        <td>$x + $y = $suma</td>
    </tr>
    <tr>
        <td>Resta</td>
        <td>$x - $y = $resta</td>
    </tr>
    <tr>
        <td>Multiplicación</td>
        <td>$x * $y = $multi</td>
    </tr>
    <tr>
        <td>Division</td>
        <td>$x / $y = $div</td>
    </tr>
    </table>"
    ?>
</body>
</html>