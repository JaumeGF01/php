<!DOCTYPE html>
<html lang="es">
<head>
    <title>Array 1</title>
</head>
<body>
    <h3>Rellenar Array 0-99</h3>
    <hr>
    <?php
        $arrayNums = [];
        for ($i=0; $i < 50; $i++) {
            $randNum = rand(0,99);
            if (in_array($randNum, $arrayNums)) {
                $i--;
            }else{
               $arrayNums[$i] = $randNum;
               if ($i == 49) {
                echo $arrayNums[$i];
               }else echo $arrayNums[$i]." - ";
               
            } 
        }
        
        echo "<h3>Ordenar Array 0-99</h3>";
        echo "<hr>";

        sort($arrayNums);
        for ($i=0; $i < count($arrayNums); $i++) {
            if ($i == 49) {
                echo $arrayNums[$i];
            }else echo $arrayNums[$i]." - ";
        }

        echo "<h3>Mayor, menor y media</h3>";
        echo "<hr>";

        $mayor = max($arrayNums);
        $menor = min($arrayNums);
        $media = (array_sum($arrayNums))/count($arrayNums);

        echo "El número más alto es $mayor";
        echo "<br>El número más bajo es $menor";
        echo "<br>La media es $media";
    ?>

</body>
</html>