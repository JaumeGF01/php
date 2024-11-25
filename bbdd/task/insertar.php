<?php
  require_once "task.php";

  
  // MYSQL: Borrado y creación de base de datos y tablas



    $pdo=conectaDb();



    $insercion = $pdo->prepare("INSERT INTO task(title, description,created_at) VALUES(:title, :description, :created_at)");
                 $insercion->bindParam(':title', $_REQUEST['title']);
                 $insercion->bindParam(':description', $_REQUEST['description']);
                 $insercion->bindParam(':created_at', $_REQUEST['created_at']);
             

    if(!$insercion->execute()) 
        echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";
    
   


$pdo = null;
header("Location:inicio.php");

