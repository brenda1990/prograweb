<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}

		public function insertaPais($datos,$archivos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		print_r($archivos);
    		echo "</pre>";
    		
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']);
			$pais->set_direccion($datos['direccion']);
			$pais->set_ubicacion($datos['ubicacion']);
			$pais->set_nombrepro($datos['nombrepro']);
			$pais->set_campo1($datos['campo1']);
			$pais->set_campo2($datos['campo2']);
			$pais->set_campo3($archivos['campo3']);
			
			if (count($pais->errores)>0) {
				print_r($pais->errores);
	             die();
			}
			else
			{
               move_uploaded_file($archivos['bandera']['tmp_name'],"../img/".$archivos['bandera']['name']);
			}
            $pais->inserta($pais->get_atributos());
			
		}


	}


?>