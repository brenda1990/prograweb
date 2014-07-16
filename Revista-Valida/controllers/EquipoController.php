<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaEquipo($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$equipo = new Equipo();
			$equipo->set_nombre($datos['nombre']);
			$equipo->set_id_pais($datos['id_pais']);
			$equipo->set_escudo($datos['escudo']);
			
			if (count($equipo->errores)>0) {
				print_r($equipo->errores);
			}
			die();
		}


	}


?>