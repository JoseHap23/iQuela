<?php
    $destino = "joseapaza883@gmail.com";
    $nombre = $_POST["email"];
    $contenido = "Email: " . $nombre;

    mail($destino,"Contacto",$contenido);
    header("Location:index.html"); 


?>