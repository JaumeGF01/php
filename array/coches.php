<!DOCTYPE html>
<html lang="es">
<head>
    <title>Array Coches</title>
</head>
<body>
    <h3>Array Coches</h3>
    <hr>
    <?php
        $matriculas = [
            "1111abc" => ["Seat", "León", 5],
            "4444abc" => ["Opel", "Vectra", 5],
            "3333abc" => ["Lada", "Niva", 3],
            "2222abc" => ["Audi", "A4", 5]
        ];
        print_r($matriculas);

        
        echo "<h3>Ordenado por matricula</h3><hr>";
        ksort($matriculas);

        foreach ($matriculas as $coche => $dato) {
            echo $coche." Marca: ".$dato[0]." Modelo: ".$dato[1]." Puertas: ".$dato[2]."<br>";
        }

    ?>
</body>
</html>