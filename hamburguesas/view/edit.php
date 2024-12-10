<h1>Editar Menú</h1>
    <form action="index.php?action=edit" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        <br>
        <label for="description">Descripción:</label>
        <input type="text" name="description" required>
        <br>
        <label for="price">Precio:</label>
        <input type="number" name="price" required>
        <br>
        <label for="image">Imagen:</label>
        <input type="text" name="image" required>
        <br>
        <label for="category">Categoria:</label>
        <input type="text" name="category" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
