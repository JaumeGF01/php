<?php
    $nombre = $_POST["nombre"];
    $passwd = $_POST["passwd"];
    $usuarios = [
        array("nombre" => "pipo",
            "passwd" => "pipo"),
    ];
    $estaBien = false;
    foreach($usuarios as $usu){
        if($usu["nombre"] === $nombre && $usu["passwd"] === $passwd){
            $estaBien=true;
            return include "inicio.php";
        }
    }
    if($estaBien===false){
        include "ko.php";
    }
    
?>