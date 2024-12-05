<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container mt-4">
        <h1 class="text-center">Artículos</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Carrito</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($articulos as $articulo) {
                        echo "<tr>";
                        echo "<td>" . $articulo['nombre'] . "</td>";
                        echo "<td>" . $articulo['precio'] . "€</td>";
                        echo "<td><a href='carro.php?id=" . $articulo['id'] . "' class='btn btn-primary btn-sm'>Añadir al carrito</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <h2 class="mt-4">Carrito de Compra</h2>
        <?php 
            if (isset($_SESSION['carro']) && count($_SESSION['carro']) > 0) {
                echo "<table class='table table-bordered table-striped'>";
                echo "<thead class='table-dark'>";
                echo "<tr><th>Nombre</th><th>Precio</th></tr>";
                echo "</thead><tbody>";

                foreach ($_SESSION['carro'] as $item) {
                    echo "<tr>";
                    echo "<td>" . $item['nombre'] . "</td>";
                    echo "<td>" . $item['precio'] . "€</td>";
                    echo "</tr>";
                }

                echo "</tbody></table>";
                echo "<a href='carro.php?vaciar=true' class='btn btn-danger'>Vaciar carrito</a>";
            } else {
                echo "<p>No hay productos en el carrito.</p>";
            }
            echo "<h3>Total: " . (isset($precioTotal) ? $precioTotal . "€" : "0€") . "</h3>";
        ?>
    </div>
</body>
</html>
