<?php
    $lista = [];
    $casas = fopen("casas_rurales.csv","r");
    while (!feof($casas)) {
        $linea = explode(";",fgets($casas));
        $lista[] = $linea;
    }
    fclose($casas);
    
    $cabecera = array_shift($lista);
    
    foreach ($lista as $valor) {
        $claves = array_combine($cabecera, $valor);
        $new[] = $claves;
    }
    
    
    include "CasasRurales.view.php";
?>
