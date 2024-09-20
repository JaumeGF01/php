<!DOCTYPE html>
<html lang="es">
<head>
    <title>Prueba If 2</title>
</head>
<body>
    <h3>Prueba If con 3 notas</h3>
    <hr>
    <?php
        $nota1 = 8;
        $nota2 = 5;
        $nota3 = 2;

        if ($nota1 > $nota2 && $nota1 > $nota3) {
            echo "La nota1: $nota1 es mayor que la nota2: $nota2 y la nota3: $nota3";
        }elseif ($nota2 > $nota1 && $nota2 > $nota3){
            echo "La nota2: $nota2 es mayor que la nota1: $nota1 y la nota3: $nota3";
        }elseif ($nota3 > $nota1 && $nota3 > $nota2){
            echo "La nota3: $nota3 es mayor que la nota1: $nota1 y la nota2: $nota2";
        }else echo "Las tres notas son iguales";
    ?>

</body>
</html>