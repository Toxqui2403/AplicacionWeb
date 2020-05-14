<?php
    session_start();
    require "../controller/controllerusuario.class.php";
    $ctr = new ControllerUsuario();

    if( isset($_POST['login'])){
        $username = trim($_POST['username']);
        $password  = sha1($_POST['password']);
        $ctr->autentificar($username,$password);
    }else{
        header("location:../view/formLogin.html");
    }
?>