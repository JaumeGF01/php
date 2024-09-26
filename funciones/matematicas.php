
<?php
    function digitos($num) {
        $num = abs($num);
        return strlen((string)$num);
    }
    function digitoN($num, $pos){
        $num = (string)$num;
        return $num[$pos-1];
    }
    function quitaPorDetras($num, $cant){
        $num = (string)$num;
        return substr($num, 0,-$cant);
    }
    function quitaPorDelante($num, $cant){
        $num = (string)$num;
        return substr($num, $cant);
    }
?>
