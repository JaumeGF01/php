<?php
require_once "../model/modelo-notas.php";

class notasControl{
    private $notasmodelo;

    public function __construct(){
        $this->notasmodelo = new Nota();
    }

    public function indice(){
        $notas = $this->notasmodelo->getAll();
        require "../view/vista-profesor.php";
    }

    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $profesor = $_POST['profesor'];
            $this->notasmodelo->update($profesor);
            header("Location: ../index.php");
        }
        else{
            $notas = $this->notasmodelo->getById($id);
            require "../view/editar.php";
        }
    }

    public function delete($id){
        $this->notasmodelo->delete($id);
        header("Location: ../index.php");
    }
}
?>