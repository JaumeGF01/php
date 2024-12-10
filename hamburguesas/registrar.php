<?php
include "header.php";
require 'config/user-conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu = $_POST['usuario'];
    $passwd = $_POST['passwd'];

    if (!empty($usu) && !empty($passwd)) {
        $sql = "INSERT INTO usuarios (usuario, passwd) VALUES (:usuario, :passwd)";
        $sentencia = $conexion->prepare($sql);
        $isOk = $sentencia->execute([
            "usuario" => $usu,
            "passwd" => password_hash($passwd, PASSWORD_DEFAULT)
        ]);

        if ($isOk) {
            echo "Usuario registrado con éxito.";
        } else {
            echo "Error al registrar el usuario.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
<style>
    .container{
        max-width:300px;
    }
    .row{
        justify-content:space-around;
    }
</style>
<div class="container mt-5 bg bg-light p-2 rounded border border-secondary">
        <form class="mb-1 align-items-center" method="post">
        <div class="col-12 align-items-center">
            <label for="usuario" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="usuario" id="usuario" >
        </div>
        <div class="col-12">
            <label for="apellidos" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="passwd" id="passwd">
        </div>
        <div class="row m-2">
            <button type="submit" class="col-5 btn btn-primary mt-2">Registrarse</button>
            <a class="col-5 btn btn-primary mt-2" href="inicio.php">Iniciar sesión</a></div>
        </form>
    </div>
