<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $password = $_POST['passwd'];

        if (isset($_POST['recordar'])){
            setcookie('usuario', $nombre , time()+3600);  
        }
    }
    print_r($_COOKIE);
    echo "Bienvenido " . $_COOKIE['usuario'];        
?>