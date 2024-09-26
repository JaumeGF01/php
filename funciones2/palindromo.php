<?php
    function palindromo($frase){
        $letrasFrase = str_replace(" ", "",$frase);
        if ($letrasFrase == strrev($letrasFrase)){
            echo "true";
        }else echo "false";
    }
?>