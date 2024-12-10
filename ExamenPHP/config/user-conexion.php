<?php
    $host = 'localhost';
    $dbname = 'tfg';
    $user = 'root';
    $passwd = '';

    try{
        $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $passwd);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Error conectando a la base de datos: " . $e->getMessage());
    }

?>