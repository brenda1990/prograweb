<?php
	class ControllerPais extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Pais();
		}
		public function insertaPais($datos){
		
			//$conti = new Continente();
			$this->set_nombre($datos['nombre']); 
		   if(count($this->errores)>0){
		   	     $this->muestra_errores=true;
		   }else{
		   	$this->inserta($this->get_atributos()); 
		   }
		   
			}
}

?>