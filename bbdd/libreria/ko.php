<?php
if (!empty($passwd) && !empty($nombre)) {
    if ($passwd !== $usuarios["passwd"]) {
        echo "La contraseña es incorrecta";
    }
}else echo "Has dejado vacio algún campo";
header("Refresh:2; url=login.php")
?>
