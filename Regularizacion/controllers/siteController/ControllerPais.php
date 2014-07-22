<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;

		function __construct(){
			 parent::Pais();
		}

		public function insertaPais($datos,$archivos){
			//$this = new Pais();
			$this->set_nombre($datos['nombre']);
			$this->set_idcontinente($datos['idcontinente']);
			$this->set_bandera($archivos['bandera']);
			
	
			if (count($this->errores)>0) {
				//print_r($equipo->errores); // si hay errores
				$this->muestra_errores = true;
	           
			}
			else
			{
            
              // move_uploaded_file($archivos['escudo']['tmp_name'],"../img/".$archivos['escudo']['name']);
                 $this->inserta($this->get_atributos());
           }
                

			}


	}


?>