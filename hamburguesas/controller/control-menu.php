<?php
require_once "model/modelo-menu.php";

class menuControl{
    private $menuModelo;

    public function __construct(){
        $this->menuModelo = new Menu();
    }

    public function indice(){
        $menus = $this->menuModelo->getAll();
        require "view/listar.php";
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $category = $_POST['category'];
            $this->menuModelo->save($name, $description, $price, $image, $category);
            header("Location: index.php");
        }
        else{
            require "view/create.php";
        }
    }

    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $category = $_POST['category'];
            $this->menuModelo->edit($id, $name, $description, $price, $image, $category);
            header("Location: index.php");
        }
        else{
            $menus = $this->menuModelo->getById($id);
            require "view/edit.php";
        }
    }

    public function delete($id){
        $this->menuModelo->delete($id);
        header("Location: index.php");
    }
}
?>