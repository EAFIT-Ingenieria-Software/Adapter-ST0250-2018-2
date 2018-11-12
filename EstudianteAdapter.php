<?php
    /*
      Clase que tiene los datos en comun que pueden tener los estudiantes.
      contiene referencias a los flyweights. Calcula o almacena los estados no compartidos de los flyweights.
    */ 
    require_once('Usuario.php');
    require_once('Estudiante.php');

     class EstudianteAdapter implements Usuario {
        private $estudiante;

        function __construct($estudiante) {
          $this->estudiante = $estudiante;

        }
        
        public function obtenerNombreCompleto(){ 
          return $estudiante->obtenerNombre().$estudiante->obtenerApellido();
        }

        public function asignarNombreCompleto($nombreCompleto) {
          $estudiante->asignarNombre($nombreCompleto[0]);
          $estudiante->asignarApellido($nombreCompleto[0]);
        }

        public function obtenerUsuario() {
          return $estudiante->obtenerUsuario();
        }

        public function asignarUsuario($usuario) {
          $estudiante->asignarUsuario($usuario);
        }

        public function obtenerContraseña() { 
          return password_hash($contraseña, PASSWORD_DEFAULT);
        }

        public function asignarConstraseña($contraseña) {
          $estudiante->asignarConstraseña($contraseña);
        }
     }
?>