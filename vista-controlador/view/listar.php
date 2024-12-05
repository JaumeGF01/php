<h1>Listado de libros</h1>
    <a href="index.php?action=create">Agregar libro</a>
    <table style="border:1px solid black">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>sinopsis</th>
            <th>Creacion</th>
        </tr>
        <?php foreach($libros as $libro): ?>
            <tr>
                <td><?= $libro['id'] ?></td>
                <td><?= $libro['title'] ?></td>
                <td><?= $libro['sinopsis'] ?></td>
                <td><?= $libro['created_at'] ?></td>
                <td><a href="../index.php?action=edit&id=<?= $libro['id']?>">Editar</a>
                <a href="../index.php?action=delete&id=<?= $libro['id']?>" onclick="return confirm('¿Estas seguro?')">Eliminar</a></td>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>