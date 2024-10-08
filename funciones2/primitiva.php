<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Primitiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #acb6e5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 535px;
            margin: auto;
            text-align: center;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #343a40;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .resultados {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .numero {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
        }

        .btn {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultados de la Primitiva</h2>
        <div class="resultados">
            <?php
                include "libreria.inc";
                $apuesta = generarAp(6,1,49);
                mostrar($apuesta);  
            ?>
        </div>
        <a href="select_apuesta.html"><button class="btn btn-primary">Volver</button></a>
    </div>
</body>
</html>
