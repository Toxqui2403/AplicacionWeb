<?php
    interface IntUsuariosService{

        public function guardar($usuario);
        public function obtenerListaUsuarios();
        public function buscarUsuarioPorUsernameContrasena($username,$password);
    }
    
?>