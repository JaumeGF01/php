<?php
require_once "model/modelo-libro.php";

class libroControl{
    private $libromodelo;

    public function __construct(){
        $this->libromodelo = new libro();
    }

    public function indice(){
        $libros = $this->libromodelo->getAll();
        require "view/listar.php";
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $sinopsis = $_POST['sinopsis'];
            $created_at = $_POST['created_at'];
            $this->libromodelo->save($title, $sinopsis, $created_at);
            header("Location: index.php");
        }
        else{
            require "view/create.php";
        }
    }

    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $sinopsis = $_POST['sinopsis'];
            $created_at = $_POST['created_at'];
            $this->libromodelo->update($id, $title, $sinopsis);
            header("Location: index.php");
        }
        else{
            $libro = $this->libromodelo->getById($id);
            require "view/edit.php";
        }
    }

    public function delete($id){
        $this->libromodelo->delete($id);
        header("Location: index.php");
    }
}
?>