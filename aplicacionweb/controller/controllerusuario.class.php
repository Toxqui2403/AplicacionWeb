<?php
    require "../service/usuariosServiceImp.class.php";
    require "../model/usuario.class.php";
    //crea la(s) variables de sesion
    session_start();

    /*class ControllerUsuario{

        public function agregar(){
            $user = new Usuario();
            $userservice = new UsuariosServiceImp();
            //********************************
            //$user->setId(7);
            $user->setNombre("Antonio");
            $user->setEmail("aruiz@gmail.com");
            $user->setUsername("antonio");
            $user->setPassword(sha1("123456"));
            //$user->setEstatus(1);
            $user->setFechaRegistro(date("Y-m-d"));
            //Llamado al metodo guardar definido en la clase de servicio
            $userservice->guardar($user);
            //echo $user->toString();
            header("location:../view/formLogin.html");
        }
    }*/

    class ControllerUsuario{

        public function agregar($user){
            $userservice = new UsuariosServiceImp();
            //llamado al metodo guardar definido en la clase de servicio
            $userservice->guardar($user);
            //echo $user->toString();
            header("location:../view/formLogin.html");
        }
        /*
        public function autentificar(){
            $userservice = new UsuariosServiceImp();
            $user = new Usuario();
            $username = "Iris";
            $password = sha1("betanzos14");
            $user = $userservice->buscarUsuarioPorUsernameContrasena($username,$password);
            echo $user->toString();
        }*/

        public function autentificar($username,$password){
            $userservice = new UsuariosServiceImp();
            $user = new Usuario();
            $user = $userservice->buscarUsuarioPorUsernameContrasena($username,$password);
            if(is_object($user)){
                $_SESSION["nombre"]=$user->getNombre();
                $_SESSION["correo"]=$user->getEmail();
                header("location:../view/carrito.php");
            }else{
                header("location:../view/formLogin.html");
            }
            //echo $user->toString();
        } //fin metodo

    } //fin clase