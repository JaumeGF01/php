<!DOCTYPE html>
<html lang="es">
<head>
    <title>Prueba If</title>
</head>
<body>
    <h3>Prueba If con 2 notas</h3>
    <hr>
    <?php
        $nota1 = 8;
        $nota2 = 5;

        if ($nota1 > $nota2) {
            echo "La nota1: $nota1 es mayor que la nota2: $nota2";
        }elseif ($nota2 > $nota1){
            echo "La nota2: $nota2 es mayor que la nota1: $nota1";
        }else echo "Las dos notas son iguales";
    ?>

</body>
</html>