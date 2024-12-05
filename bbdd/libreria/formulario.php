<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Modificar <b>Registro</b></h2></div>

                </div>
            </div>
            <?php
             require_once "task.php";
             $pdo=conectaDb();
             $consulta = $pdo->prepare("SELECT * FROM task where id=:id");
             $consulta->bindParam(':id', $_REQUEST['id']);

 
  $consulta->execute();
  $registro = $consulta->fetch();
      $id=$registro['id'];
      $titol=$registro['title'];
      $description=$registro['description'];
      $created_at=$registro['created_at'];
     echo "<div class='row'><form action='editar.php' method='post'>";

     echo "<div class='col-md-6'><label>Titulo:</label>";
    echo "  <input type='text' name='title' id='title' class='form-control' maxlength='100' value=$titol ></div>";

    echo "<div class='col-md-6'><label>Descripción:</label>";
    echo "  <input type='text' name='description' id='description' class='form-control' maxlength='100' value=$description ></div>";
    echo "  <input type='hidden' name='id' id='id' class='form-control' maxlength='100' value=$id >";
    echo " <div class='col-md-12 pull-right'><hr><button type='submit' class='btn btn-success'>Guardar datos</button></div></form></div>";

  $pdo = null;
            ?>
        </div>
    </div>     
</body>
</html>