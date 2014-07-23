<?php
	class ControllerEstado extends Estado{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Estado();
		}
		public function insertaEstado($datos){
		
			//$conti = new Continente();
			$this->set_nombre($datos['nombre']); 
			$this->set_idpais($datos['idpais']); 
		   if(count($this->errores)>0){
		   	     $this->muestra_errores=true;
		   }else{
		   	$this->inserta($this->get_atributos()); 
		   }
		   
			}
}

?>