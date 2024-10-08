<?php
    function generarAp($cant, $min, $max){
        $apuesta = [];
        for ($i=0; $i < $cant; $i++) { 
            $numRand = rand($min,$max);
            if (in_array($numRand, $apuesta)) {
                $i--;
            } else {
                $apuesta[$i] = $numRand;
            }
        }
        sort($apuesta);
        return $apuesta;
    }

    function mostrar($apuesta){
        if(count($apuesta) == 2){
            foreach ($apuesta as $numero) {
                echo "<div class='estrella'>{$numero}</div>";
            }
        }else{
            foreach ($apuesta as $numero) {
                echo "<div class='numero'>{$numero}</div>";
            }
        }
    }
?>