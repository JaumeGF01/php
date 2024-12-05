<?php
require 'config/userConexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu = $_POST['usuario'];
    $pass = $_POST['pass'];

    if (!empty($usu) && !empty($pass)) {
        $sql = "INSERT INTO usuarios (usuario, pass) VALUES (:usuario, :pass)";
        $sentencia = $conexion->prepare($sql);
        $isOk = $sentencia->execute([
            "usuario" => $usu,
            "pass" => password_hash($pass, PASSWORD_DEFAULT)
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
<form method="POST">
    <input type="text" name="usuario" placeholder="Nombre de usuario" required>
    <input type="pass" name="pass" placeholder="Contraseña" required>
    <button type="submit">Registrar</button>
</form>
<a href="login.php">Iniciar sesión</a>
