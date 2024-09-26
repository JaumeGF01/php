<?php
    $lista = [];
    $plantillas = fopen("plantillas.csv","r");
    while (!feof($plantillas)) {
        $linea = explode(",",fgets($plantillas));
        $lista[] = $linea;
    }
    fclose($plantillas);
    
    $cabecera = array_shift($lista);

    foreach ($lista as $valor) {
        $claves = array_combine($cabecera, $valor);
        $new[] = $claves;
    }
    // $atleticoJugadores = array_filter($datos, function($jugador)){
    //     return $jugador["Equipo"] === "Atlético de Madrid";
    // }
    $atletiOrden[] = usort($new, function($a,$b){
        return $a["Dorsal"] <=> $b["Dorsal"];
    });
    include "plantillas.view.php";

?>
