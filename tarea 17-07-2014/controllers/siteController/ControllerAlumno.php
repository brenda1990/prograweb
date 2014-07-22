<?php
	class ControllerAlumno extends Alumno{
		
		public $muestra_errores = false;
		function __construct(){
			
		}



        public function insertaAlumno($datos){
        	echo "<pre>datos:";
        	print_r($datos);
        	echo "</pre>";
        	$alumno = new Alumno();
        	$alumno-> set_nombre($datos['nombre']);
        	$alumno -> set_apellidos($datos['apellidos']);
        	$alumno -> set_direccion($datos['direccion']);
        	$alumno -> set_numeroc($datos['numeroc']);
            $alumno -> set_numeroc($datos['numerot']);
            $alumno -> set_numeroc($datos['fecha']);
            $alumno -> set_numeroc($datos['foto']);
        	
			if (count($alumno->errores)>0) {
				//print_r($equipo->errores); // si hay errores
				$alumno->muestra_errores = true;
	           
			}
			else
			{
            
              // move_uploaded_file($archivos['escudo']['tmp_name'],"../img/".$archivos['escudo']['name']);
                 $alumno->inserta($alumno->get_atributos());
           }
                

			}
        }


        


?>