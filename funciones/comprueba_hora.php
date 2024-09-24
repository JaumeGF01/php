<!DOCTYPE html>
<html lang="es">
<head>
    <title>Comprueba Hora</title>
</head>
<body>
    <h3>Comprueba Hora</h3>
    <hr>
    <?php
    
    function comprueba_hora($hora){
        $tiempo = explode(":", $hora);
        print_r($tiempo);
        list($horas, $minutos, $segundos) = $tiempo;
        if(count($tiempo) != 3){
            echo "Este formato de hora no es válido";
        }else if($horas >= 24 || $horas < 0){
            echo "La hora no es válida";
        }else if($minutos >= 60 || $minutos < 0){
            echo "Los minutos no son válidos";
        }else if($segundos >= 60 || $segundos <0 ){
            echo "Los segundos no son válidos";
        }else{
            echo "La hora $hora es válida";
        }
    }
    $hora = "14:46:10";
    comprueba_hora($hora);
    
?>
</body>
</html>