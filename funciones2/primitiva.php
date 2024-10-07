<?php
    $apuesta = [];
    for ($i=0; $i < 6; $i++) { 
        $numRand = rand(1,49);
        if (in_array($numRand, $apuesta)) {
            $i--;
        }else $apuesta[$i] = $numRand;
    }
    sort($apuesta);
    $numeros = implode(" ", $apuesta);

    echo $numeros;
?>