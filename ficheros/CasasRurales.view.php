<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Casas Rurales</title>
        <style>
            table,tr,td,th{
                border-collapse:collapse;
                border: 1px solid black;
                padding: 3px;
            }
        </style>
    </head>
    <body>
        <h3>Casas Rurales</h3>
        <hr>
        <?php
            echo "<table>";
            foreach ($new as $list) {
                if($list["telefono"] !== ""){
                    echo "<tr>";
                    echo "<td>{$list["id"]}</td> <td>{$list["nombre"]}</td> <td>{$list["localidad"]}</td> <td>{$list["telefono"]}</td>";
                    echo "</tr>";
                }else{
                    $listaNulos[] = $list;
                }
            }echo "</table>";
            echo "<br>";
        ?>
        <h3>Casas Rurales sin Telefonos</h3>
        <hr>
        <?php    
            echo "<table>";
            foreach ($listaNulos as $valores){
                echo "<tr>";
                echo "<td>{$valores["id"]}</td> <td>{$valores["nombre"]}</td> <td>{$valores["localidad"]}</td>";
                echo "</tr>";
            }echo "</table>";
        ?>
    </body>
</html>