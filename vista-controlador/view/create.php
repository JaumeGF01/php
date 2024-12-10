<h1>Agregar libros</h1>
    <form action="index.php?action=create" method="POST">
        <label for="title">Titulo:</label>
        <input type="text" name="title" required>
        <br>
        <label for="sinopsis">Sinopsis:</label>
        <input type="text" name="sinopsis" required>
        <br>
        <button type="submit">Guardar</button>
    </form>