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
    echo "<table>";
    foreach ($new as $list) {
        
        if ($claves["Equipo"] == "Atlético de Madrid") {
            echo "<tr>";
            echo "<td>{$list["Dorsal"]} {$list["Nombre"]} {$list["Apellidos"]} {$list["Posicion"]} {$list["Equipo"]}</td>";
            echo "</tr>";
        }
    }echo "</table>";
    

?>
