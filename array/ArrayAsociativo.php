<!DOCTYPE html>
<html lang="es">
<head>
    <title>Array Asociativo</title>
</head>
<body>
    <h3>Array Género</h3>
    <hr>
    <?php
        $arrayGen = [];
        $contador = [
            "M" => 0,
            "F" => 0
        ];
        for ($i=0; $i < 100; $i++) {
            $randNum = rand(0,1);
            if($randNum == 0){
                $arrayGen[] = "M";
            }else $arrayGen[] = "F";
        } print_r($arrayGen);

        echo "<h3>Contador</h3>";
        echo "<hr>";

        for ($i=0; $i < count($arrayGen); $i++) { 
            if($arrayGen[$i] == "M"){
                $contador["M"]++;
            }else $contador["F"]++;
        } print_r($contador);
    ?>
</body>
</html>