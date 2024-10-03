<?php
    $passwd = $_POST['passwd'];
    $nombre = $_POST['nombre'];
    
    $arrayUsuarios = [
            "nombre" => "pipo",
            "contrasena" => "pirulinPimpero20241003"   
    ];
    if (!empty($passwd) && !empty($nombre)) {
        if ($arrayUsuarios["nombre"] == $nombre && $passwd == $arrayUsuarios["contrasena"]){
            include "ok.php";
        }else {
            include "ko.php";
            header("Refresh:2; url=login.php");
        }
    }else{
        echo "No has escrito nada";
        header("Refresh:2; url=login.php");
    }
    
?>