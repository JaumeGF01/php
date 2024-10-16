<?php
    function hont($partidos,$escanos,$votos){
        $num_votos = [];
        $cont_votos = [];
        $cont = [];
        for($i = 1; $i <= $escanos; $i++){
        }
        for($i = 0;$i < count($votos); $i++){
            for($j = 1; $j <= $escanos;$j++){
                $new_num = round($votos[$i]/$j,1);
                $num_votos[] = $new_num;
                $cont[] = $new_num;
                
            }
            $cont_votos[] = $num_votos;
            $num_votos = [];
            

        }
        $votos_fin = array_combine($partidos,$cont_votos);

        rsort($cont);
        $numeros_may = array_slice($cont,0,$escanos);
        $votos = [500000, 300000, 150000, 50000];
        $escanos = 7;
        $partidos = ["Partido A", "Partido B", "Partido C", "Partido D"];

        // Calcular los 7 números más grandes
        $numeros_may = [];
        for($i = 0; $i < count($votos); $i++) {
            for($j = 1; $j <= $escanos; $j++) {
                $numeros_may[] = round($votos[$i] / $j, 1);
            }
        }
        rsort($numeros_may);
        $numeros_may = array_slice($numeros_may, 0, 7);

        // Crear la tabla transpuesta
        echo "<table>";
        
        // Primera fila: los partidos
        echo "<tr><th>Escaños</th>";
        for($i = 0; $i < count($partidos); $i++) {
            echo "<th>{$partidos[$i]}</th>";
        }
        echo "</tr>";

        // Filas de escaños
        for($j = 1; $j <= $escanos; $j++) {
            echo "<tr>";
            echo "<td>Escaño $j</td>";
            for($i = 0; $i < count($votos); $i++) {
                $new_num = round($votos[$i] / $j, 1);
                if (in_array($new_num, $numeros_may)) {
                    echo "<td style='background-color: yellow;'>{$new_num}</td>";
                    $key = array_search($new_num, $numeros_may);
                    unset($numeros_may[$key]);
                } else {
                    echo "<td>{$new_num}</td>";
                }
            }
            echo "</tr>";
        }
        
        echo "</table>";;

    }



    $votos = [500000,300000,150000,50000];
    $escanos = 7;
    $partidos = ["partido a","partido b","partido c","partido d"];
    echo hont($partidos,$escanos,$votos);

?>