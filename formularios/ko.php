<?php
if (!empty($passwd) && !empty($nombre)) {
    if ($passwd !== $arrayUsuarios["contrasena"]) {
        echo "La contraseña es incorrecta";
    }else echo "El nombre es incorrecto";
}else echo "No has introducido nada";
?>