<?php
	class EstadioController extends Estadio{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaEstadio($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$estadio = new Estadio();
			$estadio->set_nombre($datos['nombre']);
			if (count($estadio->errores)>0) {
				print_r($estadio->errores);
			}
			die();
		}


	}


?>