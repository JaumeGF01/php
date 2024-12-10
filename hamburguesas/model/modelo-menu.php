<?php
require_once "config/conexion.php";

class Menu{

    private $pdo;

    public function __construct(){
        $database = new conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){
        try{
            $consulta = "SELECT * FROM items";
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
            $consulta = "SELECT * FROM items WHERE id = $id";
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
            $borrado = $this->pdo->prepare("DELETE FROM items WHERE id =:id");
            $borrado->bindParam(':id', $id);
            return $borrado->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function edit($id, $name, $description, $price, $image, $category){
        try{
            $editar = $this->pdo->prepare("UPDATE items SET name =:name, description =:description,price =:price,image =:image, category =:category WHERE id =:id");
            $editar->bindParam(':id', $id);
            $editar->bindParam(':name', $name);
            $editar->bindParam(':description', $description);
            $editar->bindParam(':price', $price);
            $editar->bindParam(':image', $image);
            $editar->bindParam(':category', $category);
            $editar->execute();
            return true;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function save($name, $description, $price, $image, $category){
        try{
            $registro = $this->pdo->prepare("INSERT INTO items(name, description, price, image, category) VALUES(:name, :description, :price, :image, :category)");
            $registro->bindParam(':name', $name);
            $registro->bindParam(':description', $description);
            $registro->bindParam(':price', $price);
            $registro->bindParam(':image', $image);
            $registro->bindParam(':category', $category);
            return $registro->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function update($id, $name, $description, $price, $image, $category){
        $consulta = "UPDATE items SET name =:name, description =:description,price =:price,image =:image, category =:category WHERE id =:id";
        $registro = $this->pdo->prepare($consulta);
        $registro->bindParam(':id', $id);
        $registro->bindParam(':name', $name);
        $registro->bindParam(':description', $description);
        $registro->bindParam(':price', $price);
        $registro->bindParam(':image', $image);
        $registro->bindParam(':category', $category);
        return $registro->execute();
    }
}


?>