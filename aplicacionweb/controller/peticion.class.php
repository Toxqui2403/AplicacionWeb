<?php
    require "controllerusuario.class.php";
    $ctr = new controllerusuario();

    if( isset($_POST['remitir'])){
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $username = trim($_POST['username']);
        $password  = trim($_POST['password']);

        //se crea una instancia de tipo usuario
        $user = new Usuario();
        $user->setNombre($nombre);
        $user->setEmail($email);
        $user->setUsername($username);
        $user->setPassword(sha1($password));
        $user->setFechaRegistro(date("Y-m-d"));

        //invocacion del metodo para guardar
        $ctr->agregar($user);
    }
    else{
        header("location:../view/formLogin.html");
    }