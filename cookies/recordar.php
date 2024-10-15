<?php

    $recordar = $_POST['recordar'];

    if ($_SERVER['REQUEST_METHOD'] == $_POST) {
        $nombre = $_POST['nombre'];
        $contr = $_POST['passwd'];
        
        
    }
    if (isset($recordar)) {
        setcookie("nombre", $nombre,time()+1000);
        setcookie("contr", $contr,time()+1000);
    }

?>
<body>
    <div class="container mt-5 bg bg-light p-2 rounded border border-secondary">
        <form class="mb-1 align-items-center" method="post">
        <div class="col align-items-center">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" >
        </div>
        <div class="col">
            <label for="apellidos" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="passwd" id="passwd">
        </div>
        <div class="col">
            <label for="recordar">Recordar</label>
            <input type="checkbox" name="recordar" id="recordar">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>