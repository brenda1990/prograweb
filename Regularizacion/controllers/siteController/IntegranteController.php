<?php
	class IntegranteController extends Integrante{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaIntegrante($datos,$archivos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		print_r($archivos);
    		echo "</pre>";
    		
			$integrante = new Integrante();
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($archivos['foto']);
			$integrante->set_edad($datos['edad']);
			$integrante->set_idequipo($datos['idequipo']);
			if (count($integrante->errores)>0) {
				print_r($integrante->errores);
	             die();
			}
			else
			{
               move_uploaded_file($archivos['foto']['tmp_name'],"../img/".$archivos['foto']['name']);
			}
            $integrante->inserta($integrante->get_atributos());
			
		}


	}


?>