<?php
require_once "modelo/libroModelo.php";

class libroControl{
    private $libromodelo;

    public function __construct(){
        $this->libromodelo = new libro();
    }

    public function indice(){
        $libros = $this->libromodelo->getAll();
        require "vista/listar.php";
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $creacion = $_POST['creacion'];
            $this->libromodelo->save($titulo, $descripcion, $creacion);
            header("Location: index.php");
        }
        else{
            require "vista/crear.php";
        }
    }

    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $creacion = $_POST['creacion'];
            $this->libromodelo->update($id, $titulo, $descripcion);
            header("Location: index.php");
        }
        else{
            $libro = $this->libromodelo->getById($id);
            require "vista/editar.php";
        }
    }

    public function delete($id){
        $this->libromodelo->delete($id);
        header("Location: index.php");
    }
}
?>