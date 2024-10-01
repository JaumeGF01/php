<?php include "header.php"?>
<body>
    <div class="container mt-5 bg bg-light p-2 rounded border border-secondary">
        <form class="row g-3" action="compruebaLogin.php" method="post">
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" >
        </div>
        <div class="col-md-6">
            <label for="apellidos" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="passwd" id="passwd">
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>