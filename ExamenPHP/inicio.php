
<?php
include "header.php";
session_start();
require 'config/user-conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu = $_POST['login'];
    $passwd = $_POST['passwd'];

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$usu]);
    $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($passwd, $usuario['passwd'])) {
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['usuario'] = $usuario['usuario'];
        
        header('Location: view/vista-profesor.php');
        exit;
    } else {
        echo "Usuario o contraseña incorrectos.";
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
            <label for="login" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="login" id="login" >
        </div>
        <div class="col-12">
            <label for="apellidos" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="passwd" id="passwd">
        </div>
        <div class="row m-2">
            <button type="submit" class="col-5 btn btn-primary mt-2">Iniciar sesión</button>
            <a class="col-5 btn btn-primary mt-2" href="registrar.php">Crear Cuenta</a></div>
        </form>
    </div>

