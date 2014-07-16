<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaPais($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']);
			$pais->set_bandera($datos['bandera']);
			$pais->set_id_continente($datos['id_continente']);
			
			if (count($pais->errores)>0) {
				print_r($pais->errores);
			}
			die();
		}


	}


?>