<?php
    if (isset($_COOKIE['user'])) {
        echo $_COOKIE['user'];
    }else {
        $nombre = "Jaume";
        setcookie("user", $nombre, time()+1000);
    }
?>