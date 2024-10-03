<?php
    if (isset($_POST['aficiones'])) {
        $seleccion_afic = $_POST['aficiones'];
    }
    if (isset($_POST['menu'])) {
        $seleccion_menu = $_POST['menu'];
    }
    $stringAficiones = implode(", ", $seleccion_afic);
    $menuFav = implode(", ", $seleccion_menu)
    include "header.php";
?>

<body>
    <?=
    "<table class='table caption-top table-dark table-striped-columns'>
    <caption class='bg-secondary text-white'>Tabla Resumen</caption>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>URL</th>
        <th>Sexo</th>
        <th>Convivientes</th>
        <th>Aficiones</th>
        <th>Menu Favorito</th>
    </tr>
    <tr>
        <td>{$_POST['nombre']}</td>
        <td>{$_POST['apellidos']}</td>
        <td>{$_POST['correo']}</td>
        <td>{$_POST['url']}</td>
        <td>{$_POST['sexo']}</td>
        <td>{$_POST['convivientes']}</td>
        <td>{$stringAficiones}</td>
        <td>{$menuFav}</td>
    </tr>
    </table>"
?>
</body>
</html>
