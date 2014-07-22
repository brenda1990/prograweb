<?php
	class RevistaController extends Revista{
		
		public $muestra_errores = false;

		function __construct(){
			 parent::Revista();
		}

		public function insertaRevista($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			//$revista = new Revista();
			$this->set_nombre($datos['nombre']);
			$this->set_portada($datos['portada']);
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
            $this->set_editorial($datos['editorial']);
	
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