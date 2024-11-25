<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de Tareas</h2></div>

                </div>
            </div>
<?php
  require_once "task.php";
  $pdo=conectaDb();

  $consulta = $pdo->prepare("SELECT * FROM task ");
  echo "<table class='table'><thead>";
  echo "<tr> <th scope='col'>Nombre</th><th scope='col'>Descripción</th><th scope='col'>Creado en:</th><th scope='col'>operaciones</th></tr>";
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
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>