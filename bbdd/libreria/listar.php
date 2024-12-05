<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Lista de Libros</h2></div>

                </div>
            </div>
<?php
  require_once "task.php";
  $pdo=conectaDb();

  $consulta = $pdo->prepare("SELECT * FROM task ");
  echo "<table class='table table-striped table-hover'><thead>";
  echo "<tr> <th scope='col'>Titulo</th><th scope='col'>Sinopsis</th><th scope='col'>Registrado el:</th><th scope='col'>Operaciones</th></tr>";
  echo "</thead><tbody>";
  $consulta->execute();
  while($registro = $consulta->fetch())
    {
      $titol=$registro['title'];
    
    echo "<tr><td>".$registro['title']."</td><td>".$registro['description']."</td><td>".$registro['created_at'].
    "</td><td>"."<a href=formulario.php?id=".$registro['id']."><img src='pencil-square.svg' width='32' height='32'></a>
    <a href=borrar.php?id=".$registro['id']."><img src='trash-sharp.svg' width='32' height='32'></a></td>".
    "</tr>";
    }
  echo "</tbody></table>";
  $pdo = null;
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>