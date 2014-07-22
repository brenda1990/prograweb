<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;

		function __construct(){
			 parent::Equipo();
		}

		public function insertaEquipo($datos,$archivos){
		
			//$equipo = new Equipo();
			$this->set_nombre($datos['nombre']);
			$this->set_idpais($datos['idpais']);
			$this->set_escudo($archivos['escudo']);
			
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