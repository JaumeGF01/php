<?php
    function analizador($frase){
        $cantPalabras = explode(" ",$frase);
        $letrasTotales = strlen(str_replace(" ", "",$frase));
        echo "La frase tiene en total ".count($cantPalabras)." palabras<br>";
        echo "La frase tiene en total ".$letrasTotales." letras<br>";
        for ($i=0; $i < count($cantPalabras); $i++) {
            $letrasPalabra = strlen($cantPalabras[$i]); 
            echo $cantPalabras[$i]." ".$letrasPalabra;
            echo "<br>";
        }
    }
?>