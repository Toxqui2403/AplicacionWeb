<?php
    session_start();
    session_destroy(); //elimina la(s) variables de sesion
    header("location:../index.html");
?>