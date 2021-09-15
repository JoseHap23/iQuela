<?php
    $destino = "joseapaza883@gmail.com";
    $nombre = $_POST["email"];
    $contenido = "Email: " . $nombre;

    mail($destino,"Contacto",$contenido);
    header("Location:https://www.figma.com/proto/HLa43RkdveNa5AsFz8HA5m/iQuela-prototipo?node-id=2%3A2&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=51%3A64"); 


?>