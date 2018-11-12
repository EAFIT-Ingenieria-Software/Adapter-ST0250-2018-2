<?php
    /*
      Clase que tiene los datos en comun que pueden tener los estudiantes.
      contiene referencias a los flyweights. Calcula o almacena los estados no compartidos de los flyweights.
    */ 
    require_once('Usuario.php');

     class Entrevistador implements Usuario {
        private $nombreCompleto;
        private $usuario;
        private $contraseña;
        
        public function obtenerNombreCompleto(){ 
          return $nombreCompleto;
        }

        public function asignarNombreCompleto($nombreCompleto) {
          $this->nombreCompleto = $nombreCompleto;
        }

        public function obtenerUsuario() {
          return $usuario;
        }

        public function asignarUsuario($usuario) {
          $this->usuario = $usuario;
        }

        public function obtenerContraseña() { 
          return $contraseña;
        }

        public function asignarConstraseña($contraseña) {
          $this->contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
        }
     }
?>