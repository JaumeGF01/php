<?php
    $passwd = $_POST['passwd'];
    $nombre = $_POST['nombre'];
    
    $arrayUsuarios = [
            "nombre" => "pipo",
            "contrasena" => "a"   
    ];
    
    if ($arrayUsuarios["nombre"] == $nombre && $passwd == $arrayUsuarios["contrasena"]){
        include "ok.php";
    }else{
        include "ko.php";
        header("Refresh:2; url=login.php");
    }
    
?>