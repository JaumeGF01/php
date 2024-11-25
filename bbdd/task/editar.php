<?php

require_once "task.php";
$pdo=conectaDb();

$insercion = $pdo->prepare("update task set title=:title, description=:description, created_at=:created_at where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);
$insercion->bindParam(':title', $_REQUEST['title']);
$insercion->bindParam(':description', $_REQUEST['description']);
$insercion->bindParam(':created_at', $_REQUEST['created_at']);




if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";


$pdo = null;
header("Refresh:1; url=inicio.php");

echo '<p>En breve le redirigiremos al listado.</p>';