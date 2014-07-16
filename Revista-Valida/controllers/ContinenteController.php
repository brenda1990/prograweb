<?php
	class ContinenteController extends Continente{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaContinente($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$continente = new Continente();
			$continente->set_nombre($datos['nombre']);
			if (count($continente->errores)>0) {
				print_r($continente->errores);
			}
			die();
		}


	}


?>