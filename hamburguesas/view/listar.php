<h1>Listado de menus</h1>
    <a href="index.php?action=create">Agregar Menu</a>
    <table style="border:1px solid black">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        <?php foreach($menus as $menu): ?>
            <tr>
                <td><?= $menu['id'] ?></td>
                <td><?= $menu['name'] ?></td>
                <td><?= $menu['description'] ?></td>
                <td><?= $menu['price'] ?></td>
                <td><img src="images/<?= $menu['image'] ?>" alt="Imagen de menu" width="100" height="100"></td>
                <td><?= $menu['category'] ?></td>
                <td><a href="../index.php?action=edit&id=<?= $menu['id']?>">Editar</a>
                <a href="../index.php?action=delete&id=<?= $menu['id']?>" onclick="return confirm('¿Estas seguro?')">Eliminar</a></td>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>