<?php
	class AutorController extends Autor{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaAutor($datos,$archivos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		print_r($archivos);
    		echo "</pre>";
    		
			$autor = new Autor();
			$autor->set_nombre($datos['nombre']);
			$autor->set_apellidos($datos['apellidos']);
			$autor->set_email($datos['email']);
			$autor->set_foto($archivos['foto']);
			
			if (count($autor->errores)>0) {
				print_r($autor->errores);
	             die();
			}
			else
			{
               move_uploaded_file($archivos['foto']['tmp_name'],"../img/".$archivos['foto']['name']);
			}
            $autor->inserta($autor->get_atributos());
			
		}


	}


?>