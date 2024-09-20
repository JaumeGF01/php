<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contador</title>
</head>
<body>
    <h3>Contador 1-100</h3>
    <hr>
    <?php
        for ($i=1; $i <= 100; $i++) { 
            if($i == 100){
                echo "$i" ;
            }else echo "$i, ";
        }
    ?>
    <h3>Contador 10-0</h3>
    <hr>
    <?php
        $a = 10;
        while ($a >= 0) {
            if ($a == 0) {
                echo "$a";
                break;
            }else {
                echo "$a-";
                $a--;
            }
        }
    ?>
</body>
</html>