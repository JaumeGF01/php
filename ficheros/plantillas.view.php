<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Plantillas</title>
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
            echo "<table>";
            foreach ($new as $list) {
                if ($list["Equipo"] == "Atlético de Madrid") {
                    echo "<tr>";
                    echo "<td>{$list["Dorsal"]}</td> <td>{$list["Nombre"]}</td> <td>{$list["Apellidos"]}</td> <td>{$list["Posicion"]}</td> <td>{$list["Equipo"]}</td>";
                    echo "</tr>";
                }
            }echo "</table>";
        ?>
    </body>
</html>