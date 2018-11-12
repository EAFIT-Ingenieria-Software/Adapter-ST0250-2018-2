<?php
    /*
      Clase que tiene los datos en comun que pueden tener los estudiantes
    */ 
     interface Usuario {

        public function obtenerNombreCompleto();
        public function asignarNombreCompleto($nombreCompleto);
        public function obtenerUsuario();
        public function asignarUsuario($usuario);
        public function obtenerContraseña();
        public function asignarConstraseña($contraseña);
     }
?>