<!DOCTYPE html>
<html lang="es">
<head>
    <title>Array Coches</title>
    <style>
        table,tr,td,th{
            border-collapse:collapse;
            border: 1px solid black;
            padding: 3px;
        }
    </style>
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
        echo "<table>";
        echo "<tr>
                <th>Matricula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Puertas</th>
              </tr>";

        foreach ($matriculas as $coche => $dato) {
            echo "<tr>";
            echo "<td>{$coche}</td>";
            echo "<td>{$dato['0']}</td>";
            echo "<td>{$dato['1']}</td>";
            echo "<td>{$dato['2']}</td>";
            echo "</tr>";
        }

    ?>
</body>
</html>