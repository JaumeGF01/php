<?php
    $recordar = $_POST['recordar'];

    $nombre = $_POST['nombre'];
    $contr = $_POST['passwd']; 
    
    if (isset($recordar)) {
        setcookie("nombre", $nombre,time()+1000);
        setcookie("contr", $contr,time()+1000);

    }
    echo "Bienvenido ".$nombre;
    
?>
