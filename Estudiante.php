<?php
    /*
      Clase que tiene los datos en comun que pueden tener los estudiantes.
      contiene referencias a los flyweights. Calcula o almacena los estados no compartidos de los flyweights.
    */ 
    require_once('Usuario.php');

     class Estudiante {
        private $nombre;
        private $apellido;
        private $usuario;
        private $contraseña;
        
        public function obtenerNombre(){ 
          return $nombreCompleto;
        }

        public function asignarNombre($nombreCompleto) {
          $this->nombre = $nombre;
        }

        public function obtenerApellido(){ 
          return $apellido;
        }

        public function asignarApellido($nombreCompleto) {
          $this->apellido = $apellido;
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
          $this->contraseña = $contraseña;
        }
     }
?>