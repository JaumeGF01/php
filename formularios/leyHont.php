<?php
    // function hont($numPartidos,$votos,$escaños){
    //     echo "<table border='1'>";
        
    //     for ($i=1; $i <= $numPartidos; $i++) {
    //         echo "<tr>";
    //         echo "<th>Partido $i</th> ";
    //         for ($x=0; $x < count($votos); $x++) {
    //             echo "<tr>";
                
    //             echo "<td>Escaño $x</td>";
    //             $nuevos_votos = round($votos[$x]/$i,1);
    //             echo "<td>$nuevos_votos</td>";
    //             echo "<tr>";
    //         }echo "</tr>";
    //     }
    //     echo "</table>";
    // }
    $votos = [500000,300000,150000,50000];
    // hont(4, $votos, 7);

    function hont2($votos){
        echo "<table border='1'>";
        for ($i=1; $i < 8; $i++) {
            echo "<tr>";
            for ($j=0; $j < count($votos); $j++) {
                $votoEsc = round($votos[$j]/$i,1);
                echo "<td>{$votoEsc}</td></tr>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    echo (hont2($votos));
?>