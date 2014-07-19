<?php
	class IndiceController extends Indice{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaIndice($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$indice = new Indice();
			$indice->set_nombre($datos['nombre']);
			if (count($indice->errores)>0) {
				print_r($indice->errores);
			}
			die();
		}


	}


?>