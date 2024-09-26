<?php
    function fraseImpares($frase){
        $fraseNueva ="";

        for ($i=0; $i < strlen($frase); $i++) { 
            if ($i % 2 == 0) {
                $fraseNueva .= $frase[$i];
            }
        }
        return $fraseNueva;
    }
    include "fraseImpares.php";
?>