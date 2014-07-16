<?php
	class IntegranteController extends Integrante{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaIntegrante($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$integrante = new Integrante();
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($datos['foto']);
			$integrante->set_edad($datos['edad']);
			$integrante->set_id_equipo($datos['id_equipo']);
			
			if (count($integrante->errores)>0) {
				print_r($integrante->errores);
			}
			die();
		}


	}


?>