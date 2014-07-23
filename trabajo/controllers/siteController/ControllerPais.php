<?php
	class ControllerPais extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Pais();
		}
		public function insertaPais($datos,$archivos){
		
			//$conti = new Continente();
			$this->set_nombre($datos['nombre']); 
			$this->set_idcontinente($datos['idcontinente']); 
			$this->set_bandera($archivos['bandera']); 
		   if(count($this->errores)>0){
		   	     $this->muestra_errores=true;
		   }
		   else
			{
               move_uploaded_file($archivos['bandera']['tmp_name'],"../img/".$archivos['bandera']['name']);
			}
            $this->inserta($this->get_atributos());
		   
			}
}

?>