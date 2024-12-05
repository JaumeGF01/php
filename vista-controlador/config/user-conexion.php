<?php
    $host = 'localhost';
    $dbname = 'usuarios';
    $user = 'root';
    $pass = '';

    try{
        $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Error conectando a la base de datos: " . $e->getMessage());
    }

?>