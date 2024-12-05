<?php
session_start();

$articulos = [
    ["id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60],
    ["id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15],
    ["id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50],
    ["id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20]
];

if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = [];
}

if (isset($_GET['id'])) {
    $idArticulo = $_GET['id'];
    foreach ($articulos as $articulo) {
        if ($articulo['id'] == $idArticulo) {
            $_SESSION['carro'][] = $articulo;
            break;
        }
    }
}

$precioTotal = 0;
if (isset($_SESSION['carro'])) {
    foreach ($_SESSION['carro'] as $precioArt) {
        $precioTotal += $precioArt['precio'];
    }
}

if (isset($_GET['vaciar']) && $_GET['vaciar'] == 'true') {
    unset($_SESSION['carro']);
    session_destroy();
    $precioTotal = 0;
}

include('carro.view.php');
?>
