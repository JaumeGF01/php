<?php
    echo "
        <ul style='list-style-type:none;'>
            <li><a id='1' href='#'>Zapatillas Nike (60€)</a></li>
            <li><a id='2' href='#'>Sudadera Domyos (15€)</a></li>
            <li><a id='3' href='#'>Pala de pádel Vairo (50€)</a></li>
            <li><a id='4' href='#'>Pelota de baloncesto Molten (20€)</a></li>
        </ul>
        ";

    $precioTotal = 0;
    $articulos = [
        ["id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60],
        ["id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15],
        ["id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50],
        ["id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20]
    ];
    
    echo "Precio total: ". $precioTotal;
?>