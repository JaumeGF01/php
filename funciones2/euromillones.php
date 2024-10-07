<?php
//Una apuesta de 5 números entre 50 posibles (del 1 al 50) 
//más 2 estrellas de entre 9 posibles (del 1 al 9)
    function euromillon(){
        $apuesta = [];
        for ($i=0; $i < 5; $i++) { 
            $numRand = rand(1,50);
            if (in_array($numRand, $apuesta)) {
                $i--;
            }else $apuesta[$i] = $numRand;
        }
        sort($apuesta);
        $numero = implode(" ", $apuesta);
        echo $numero;
    }euromillon();
    function estrella(){
        $estrella = [];
        for ($x=0; $x < 2; $x++) { 
        $randNum = rand(1,9);
        if (in_array($randNum, $estrella)) {
                $x--;
        }else $estrella[$x] = $randNum;
        }
        sort($estrella);
        $euro = implode(" ", $estrella);

        echo " ".$euro; 
    }estrella();
    
?>