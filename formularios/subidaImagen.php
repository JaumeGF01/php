<?php
    $arrayImg = [];

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {

        if ($_FILES['imagen']['type'] == 'image/png') {
            $arrayImg[] = $_FILES['imagen']['name'];
        } else {
            echo "El archivo no es de tipo PNG.";
        }
    } else {
        echo "No se ha subido ningún archivo o hubo un error en la subida.";
    }

    foreach ($arrayImg as $imagen) {
        echo $imagen;
    }

    print_r($arrayImg);
?>