<?php
	class ControllerEquipo extends Equipo{
		
		public $muestra_errores = false;
		function __construct(){
			
		}



        public function insertaEquipo($datos){
        	echo "<pre>datos:";
        	print_r($datos);
        	echo "</pre>";
        	$equipo = new equipo();
        	$equipo -> set_idequipo($datos['idequipo']);
        	$equipo -> set_nombre($datos['nombre']);
        	$equipo -> set_idpais($datos['idpais']);
            $equipo -> set_escudo($datos['escudo']);
        	if(count($Equipo->errores)>0){
        		print_r($Equipo->errores);
        	} 
        	die();
        }


        
		
		public function validaEquipo($datos){
			$rs = $this->consulta_sql(" select * from equi where nombre = '".$datos['nombre']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['nombre']== md5($datos['nombre'])) {
        			$this->validanombre($rows['0']['rol'],$rows['0']['nombre']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

	
	}


?>