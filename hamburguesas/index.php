<?php
    
    require_once "controller/control-menu.php";
    $index = new menuControl;
    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? null;
    if ($action == 'create'){
        $index->create();
    }
    else if ($action == 'edit'){
        $index->edit($id);
    }
    else if ($action == 'delete'){
        $index->delete($id);
    }
    else{
        $index->indice();
    }

?>