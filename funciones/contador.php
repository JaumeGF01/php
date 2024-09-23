<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contador</title>
</head>
<body>
    <h3>Contador</h3>
    <hr>
    <?php
    function cuenta($a, $b){
        if($a > $b){
            for ($a; $a >= $b; $a--) { 
                if($a == $b){
                    echo "$a";
                }else{
                    echo "$a, ";
                }
            }
        } else if ($b > $a) {
            for ($a; $a <= $b; $a++) {
                if ($a == $b) {
                    echo "$a";
                }else {
                    echo "$a, ";
                }
            }
        } else echo "Los números son iguales: $a";
    }
    cuenta(10, 20);
?>
</body>
</html>