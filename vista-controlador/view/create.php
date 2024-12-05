<h1>Agregar libros</h1>
    <form action="index.php?action=create" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required>
        <br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" required>
        <br>
        <button type="submit">Guardar</button>
    </form>