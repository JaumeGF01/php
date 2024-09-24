<!DOCTYPE html>
<html lang="es">
<head>
    <title>Intercambia</title>
    <style>
        table,tr,td,th{
            border-collapse:collapse;
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <h3>Plantillas</h3>
    <hr>
    <?php
        $lista = [];
        $listaFinal =[];
        $plantillas = fopen("plantillas.csv","r");
        while (!feof($plantillas)) {
            $linea = explode(",",fgets($plantillas));
            $lista[] = $linea;
        }
        // echo "<table>";
        $cabecera = array_shift($lista);
        
        foreach ($lista as $fila) {
            
            for ($i=0; $i < count($lista); $i++) { 
                echo $fila[$i];
                
            }
        }
        // for ($i=0; $i < count($lista); $i++) {
        //     echo "<tr>";
        //     for ($c=0; $c < count($linea); $c++) {
        //         echo "<td>{$lista[$i][$c]}</td>";
        //     }
        //     echo "</tr>";
        // }echo "<br>";
        // echo "</table>";

        fclose($plantillas);

    ?>
</body>
</html>