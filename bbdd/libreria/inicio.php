<?php
include_once("header.php");
?>
	<header>
		<a href="login.php"><button style="float:right"><img src="logout.svg" width='32' height='32'></button></a>
	</header>
   <div class="row">
					<div class="col-sm-8"><h2>Bienvenido, <b><?=$_REQUEST['nombre']?></b></h2></div>
                    <div class="col-sm-8"><h2>Agregar <b>Libro</b></h2></div>

                </div>
            </div>
			<div class="row">
				<form action="insertar.php" method="post">
				<div class="col-md-2">
					<label>Titulo:</label>
					<input type="text" name="title" id="title" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-10">
					<label>Sinopsis:</label>
					<input type="description" name="description" id="description" class='form-control' maxlength="100" required >
				</div>
							
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar libro</button>
				</div>
				</form>
			</div>
        </div>
    </div>    
	<footer>
</footer> 
</body>
<?php
  require "listar.php";
?>
</html>