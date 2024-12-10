<h1>Listado de Notas</h1>
    <table style="border:1px solid black">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Profesor1</th>
            <th>Profesor2</th>
            <th>Profesor3</th>
            <th>Tutor</th>
        </tr>
        <?php foreach($notas as $nota): ?>
            <tr>
                <td><?= $nota['id'] ?></td>
                <td><?= $nota['nombre'] ?></td>
                <td><?= $nota['apellido1'] ?></td>
                <td><?= $nota['apellido2'] ?></td>
                <td><?= $nota['profesor1'] ?></td>
                <td><?= $nota['profesor2'] ?></td>
                <td><?= $nota['profesor3'] ?></td>
                <td><a href="../index.php?action=edit&id=<?= $nota['id']?>">Editar</a>
                <a href="../index.php?action=delete&id=<?= $nota['id']?>" onclick="return confirm('¿Estas seguro?')">Eliminar</a></td>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>