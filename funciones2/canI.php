<?php
    function canI($frase){
        $fraseCani = "";
        $contarLetras = 0;
        for ($i=0; $i < strlen($frase); $i++) { 
            if ($frase[$i] == " ") {
                $fraseCani .= " ";
            }else{
                if ($contarLetras % 2 == 0) {
                    $fraseCani .= strtoupper($frase[$i]);
                }else $fraseCani .= strtolower($frase[$i]);
                $contarLetras++;
            }
        }return $fraseCani;
    }
    include "canI.view.php";
?>