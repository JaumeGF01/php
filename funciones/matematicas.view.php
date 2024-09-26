<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función Dígitos</title>
</head>
<body>
    <h3>Función para contar los dígitos</h3>
    <hr>
    <?php
        include "matematicas.php";
        echo digitos(2287334);
    ?>
    <h3>Función para buscar por posición</h3>
    <hr>
    <?php echo digitoN(1234,3); ?>
    <h3>Función para quitar x numeros por detrás</h3>
    <hr>
    <?php echo quitaPorDetras(12345,2); ?>
    <h3>Función para quitar x numeros por delante</h3>
    <hr>
    <?php echo quitaPorDelante(12345,2); ?>
</body>
</html>