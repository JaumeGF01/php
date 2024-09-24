<!DOCTYPE html>
<html lang="es">
<head>
    <title>Intercambia</title>
</head>
<body>
    <h3>Intercambiar valores</h3>
    <hr>
    <?php
    function intercambia(&$a, &$b){
        echo "El valor de a era: $a";
        echo "<br>El valor de b era: $b";
        $c = $a;
        $a = $b;
        $b = $c;
        
        echo "<br>El valor de a es: $a";
        echo "<br>El valor de b es: $b";
    }
    intercambia(10, 20);
?>
</body>
</html>