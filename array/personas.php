<!DOCTYPE html>
<html lang="es">
<head>
    <title>Array Personas</title>
    <style>
        table,tr,td,th{
            border-collapse:collapse;
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <h3>Array Personas</h3>
    <hr>
    <?php
        $personas = [
            [
                "Nombre" => "Pablo",
                "Altura" => 178,
                "email" => "pablo@email.com"
            ],[
                "Nombre" => "Jose",
                "Altura" => 160,
                "email" => "jose@email.com"
            ],[
                "Nombre" => "Alberto",
                "Altura" => 163,
                "email" => "alberto@email.com"
            ],[
                "Nombre" => "Alex",
                "Altura" => 182,
                "email" => "alex@email.com"
            ],[
                "Nombre" => "Imanol",
                "Altura" => 195,
                "email" => "imanol@email.com"
            ]
        ];
        echo "<table>";
        echo "<tr>
                <th>Nombre</th>
                <th>Altura</th>
                <th>Email</th>
              </tr>";

        foreach ($personas as $persona) {
            echo "<tr>";
            echo "<td>{$persona['Nombre']}</td>";
            echo "<td>{$persona['Altura']}</td>";
            echo "<td>{$persona['email']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>