<?php
require_once "../config/conexion.php";

class Nota{

    private $pdo;

    public function __construct(){
        $database = new conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){
        try{
            $consulta = "SELECT * FROM notas";
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
            $consulta = "SELECT * FROM notas WHERE id = $id";
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
            $borrado = $this->pdo->prepare("DELETE FROM notas WHERE id =:id");
            $borrado->bindParam(':id', $id);
            return $borrado->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function edit($id, $nombre, $profesor){
        try{
            $editar = $this->pdo->prepare("UPDATE notas SET nombre =:nombre, profesor =:profesor WHERE id =:id");
            $editar->bindParam(':id', $id);
            $editar->bindParam(':nombre', $nombre);
            $editar->bindParam(':profesor', $profesor);
            $editar->execute();
            return true;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function save($nombre, $profesor){
        try{
            $registro = $this->pdo->prepare("INSERT INTO notas(nombre, profesor) VALUES(:nombre, :profesor)");
            $registro->bindParam(':profesor', $profesor);
            $registro->bindParam(':nombre', $nombre);
            return $registro->execute();
        }
        catch(PDOException $e){
            die ($e->getMessage());
        }
    }

    public function update($id, $nombre, $profesor){
        $consulta = "UPDATE notas SET nombre =:nombre, profesor =:profesor WHERE id =:id";
        $registro = $this->pdo->prepare($consulta);
        $registro->bindParam(':id', $id);
        $registro->bindParam(':nombre', $nombre);
        $registro->bindParam(':profesor', $profesor);
        return $registro->execute();
    }
}


?>