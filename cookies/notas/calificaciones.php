<?php
    
    session_start();
    
    $boton = $_REQUEST['añadir'];
    

    echo "<form>
            <input type='text' name='nombre' placeholder='Nombre'>
            <input type='number' name='nota1' placeholder='nota1'>
            <input type='number' name='nota2' placeholder='nota2'>
            <input type='number' name='nota3' placeholder='nota3'>
            <button name='añadir' type='submit'>Añadir</button>
         </form>";
    
    $lista = [
        'nombre' => $_POST['nombre'],
        'nota1' => $_POST['nota1'],
        'nota2' =>$_POST['nota2'],
        'nota3' =>$_POST['nota3']];
    
    $_SESSION[$lista];

    if (isset($boton)) {
        
        
        print_r($_SESSION);
    }
?>