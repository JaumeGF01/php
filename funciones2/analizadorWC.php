<?php
    function analizadorWC($frase) {
        $palabras = str_word_count($frase, 1);
        $cantPalabras = count($palabras);
        $letrasTotales = strlen(str_replace(" ", "", $frase));
        echo "La frase tiene en total $cantPalabras palabras<br>";
        echo "La frase tiene en total $letrasTotales letras<br>";
        foreach ($palabras as $palabra) {
            $letrasPalabra = strlen($palabra);
            echo "$palabra $letrasPalabra<br>";
        }
    }
?>