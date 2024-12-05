<?php
require_once "config/conexion.php";

class libro{

    private $pdo;

    public function __construct(){
        $database = new conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){
        try{
            $consulta = "SELECT * FROM libros";
            $registro = $this->pdo->prepare($consulta);
            $registro->execute();
            return $registro->fetchAll();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getById($id){
        try{
            $consulta = "SELECT * FROM libros WHERE id = $id";
            $registro = $this->pdo->prepare($consulta);
            $registro->execute();
            return $registro->fetch();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function delete($id){
        try{
            $borrado = $this->pdo->prepare("DELETE FROM libros WHERE id =:id");
            $borrado->bindParam(':id', $id);
            return $borrado->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function edit($id, $title, $sinopsis){
        try{
            $editar = $this->pdo->prepare("UPDATE libros SET title =:title, sinopsis =:sinopsis WHERE id =:id");
            $editar->bindParam(':id', $id);
            $editar->bindParam(':title', $title);
            $editar->bindParam(':sinopsis', $sinopsis);
            $editar->execute();
            return true;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function save($title, $sinopsis, $created_at){
        try{
            $registro = $this->pdo->prepare("INSERT INTO libros(title, sinopsis, created_at) VALUES(:title, :sinopsis, :created_at)");
            $registro->bindParam(':sinopsis', $sinopsis);
            $registro->bindParam(':title', $title);
            $registro->bindParam(':created_at'  , $created_at);
            return $registro->execute();
        }
        catch(PDOException $e){
            die ($e->getMessage());
        }
    }

    public function update($id, $title, $sinopsis){
        $consulta = "UPDATE libros SET title =:title, sinopsis =:sinopsis WHERE id =:id";
        $registro = $this->pdo->prepare($consulta);
        $registro->bindParam(':id', $id);
        $registro->bindParam(':title', $title);
        $registro->bindParam(':sinopsis', $sinopsis);
        return $registro->execute();
    }
}


?>