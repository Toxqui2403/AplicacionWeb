<?php
    session_start();
    //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
    if(!isset($_SESSION["nombre"]) and !isset($_SESSION["correo"])){
        //si no existe, envio a la pagina de autentificacion
        header("Location: ../index.html");
        //ademas salir del script
        exit();
    }

?>