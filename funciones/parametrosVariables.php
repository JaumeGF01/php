<!DOCTYPE html>
<html lang="es">
<head>
    <title>Intercambia</title>
</head>
<body>
    <h3>Numero mayor sin usar max()</h3>
    <hr>
    <?php
    function mayor(...$numeros){
        $arrayNums = func_get_args();
        
        // rsort($arrayNums);
        // echo $arrayNums[0];
        
        for ($i=0; $i < func_num_args(); $i++) {
            $a = 0;
            if ($arrayNums[$i] > $a) {
                $a = $arrayNums[$i];
            }
        }echo $a;
    }
    mayor(10,20,3,6,50,60);
?>
</body>
</html>