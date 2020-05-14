<?php

    require "intUsuariosService.class.php";
    require "../config/configdb.php";
    require "../config/conexion.class.php";

    class UsuariosServiceImp implements IntUsuariosService {

        private $datos=array();

        //sobreescribir los métodos abstractos
        //***********************************/
        public function guardar($user){
            $this->datos[]=$user;
            //var_dump($this->datos);
            //echo $this->datos[0]-<getNombre();
            $nom = $this->datos[0]->getNombre();
            $correo = $this->datos[0]->getEmail();
            $usuario = $this->datos[0]->getUsername();
            $pass = $this->datos[0]->getPassword();
            $estatus = $this->datos[0]->getEstatus();
            $fecha = $this->datos[0]->getFechaRegistro();
            $sql = "insert into usuarios values(null,
                    '$nom',
                    '$correo',
                    '$usuario',
                    '$pass',
                    $estatus,
                    '$fecha')";
            //echo $sql;
            $obj = new Conexion("localhost","root","","grupo51");
            $obj->obtenerConn(); //obtener la conexión
            $obj->ejecutarQuery($sql);  //ejecuta la sentencia sql
            $obj->cerrar(); //cerrar la conexion a la base de datos
            
        }
        //***********************************/
        public function obtenerListaUsuarios(){

        }
        //***********************************/
        public function buscarUsuarioPorUsernameContrasena($username,$password){
            $sql = "Select * from usuarios where username like '$username'"."and password like '$password'";

            $obj = new Conexion("localhost","root","","grupo51");
            $obj->obtenerConn(); //obtener la conexión
            $result = $obj->ejecutarQuery($sql);  //ejecuta la sentencia sql
            if( mysqli_num_rows($result) > 0){
                $row = array(); //arreglo para almacenar el registro actual
                $row = mysqli_fetch_array($result);
                $user = new Usuario();
                $user->setId($row[0]); //id
                $user->setNombre($row[1]); //nombre
                $user->setEmail($row[2]); //correo
                $user->setUsername($row[3]);
                $user->setPassword($row[4]);
                $user->setEstatus($row[5]);
                $user->setFechaRegistro($row[6]);
                $obj->cerrar(); //cerrar la conexión a la base de datos
                return $user;
                //echo $user->toString();
            }
            else{
                $obj->cerrar();
                return null;
            }
        } //fin del método
    } //fin de clase
    ?>