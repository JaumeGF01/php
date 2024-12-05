<?php
    session_start();

    if(isset($_SESSION['alumnos'])){
        $alumnos = $_SESSION['alumnos'];
    }else $alumnos = [];

    if (isset($_REQUEST['añadir'])) {
        $nombre = $_POST['nombre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $media = ($nota1 + $nota2 + $nota3)/3;
        $lista = [
            'nombre' => $_POST['nombre'],
            'nota1' => $_POST['nota1'],
            'nota2' =>$_POST['nota2'],
            'nota3' =>$_POST['nota3'],
            'media' =>$media
        ];
        $alumnos[] = $lista;
        $_SESSION['alumnos'] = $alumnos;
    
    }

    if (isset($_GET['borrar'])) {
        unset($_SESSION['alumnos']);
        session_destroy();
    }

    include('calificaciones.view.php');
?>