<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Notas Alumnos</title>
    <style>
        form{
            max-width:900px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Notas Alumnos</h1>
        
        <form action="calificaciones.php" method="post" class="mb-4">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1:</label>
                <input type="number" name="nota1" id="nota1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2:</label>
                <input type="number" name="nota2" id="nota2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3:</label>
                <input type="number" name="nota3" id="nota3" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success" value="añadir" name="añadir">Añadir</button>
        </form>

        <h2 class="mb-4">Lista de Alumnos</h2>
        <?php
            if (isset($_SESSION['alumnos']) && count($_SESSION['alumnos']) > 0) {
                echo "<table class='table table-bordered table-striped'>";
                echo "<thead class='table-dark'><tr><th>Nombre</th><th>Primera</th><th>Segunda</th><th>Tercera</th><th>Media</th></tr></thead>";
                echo "<tbody>";
                foreach ($_SESSION['alumnos'] as $alumno) {
                    echo "<tr>";
                    echo "<td>{$alumno['nombre']}</td>";
                    echo "<td>{$alumno['nota1']}</td>";
                    echo "<td>{$alumno['nota2']}</td>";
                    echo "<td>{$alumno['nota3']}</td>";
                    echo "<td>{$alumno['media']}</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
                echo "<a href='calificaciones.php?borrar=true' class='btn btn-danger mt-3'>Borrar Lista</a>";
            } else {
                echo "<p>No hay alumnos registrados.</p>";
            }
        ?>
    </div>
</body>
</html>
