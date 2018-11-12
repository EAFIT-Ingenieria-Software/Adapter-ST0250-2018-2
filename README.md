# Adapter-ST0250-2018-2
Repositorio para dar ejemplo en código al patrón de diseño Adapter

# Integrantes
1. Santiago Soto M
2. Jamerson S Correa C
3. Andres Sanchez C

# Patron de Diseño: Adapter
En este caso se agrego un clase nueva al proyecto: Entrevistador, y antes habia una clase Estudiante,
y las dos debian cumplir con la interfaz Usurio, entonces fue necesario implementr un adaptador para estudiante.


# Lenguaje de Programacion: PHP
En este lenguaje sera desarrollada la aplicacion

Se creo la interfaz Usurio que sera la aplicacion usara, tambien se creo Entrevistador que implementa esta interfaz, 
pero estaba la clase Estudiante que no la implementa, para esto se creo EstudianteAdapter, clase la cual implenta la 
interfaz de usuario y ayuda a que se pueda utilizar estudiante.
