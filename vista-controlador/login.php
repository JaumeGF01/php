
<?php
session_start();
require 'config/user-conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$usu]);
    $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['usuario'] = $usuario['usuario'];
        
        header('Location: index.php');
        exit;
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
<form method="POST">
    <input type="text" name="login" placeholder="Nombre de usuario" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
</form>
<a href="register.php">Registrarse</a>
