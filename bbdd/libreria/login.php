<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            max-width: 250px;
        }
    </style>
</head>
<body>
    <div class="container mt-5 bg bg-light p-2 rounded border border-secondary">
        <form class="mb-1 align-items-center" action="compruebaLogin.php" method="post">
        <div class="col align-items-center">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" >
        </div>
        <div class="col">
            <label for="apellidos" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="passwd" id="passwd">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>