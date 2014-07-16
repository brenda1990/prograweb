<?php
	class ControllerIntegrante extends Integrante{
		
		public $muestra_errores = false;
		function __construct(){
			
		}



        public function insertaIntegrante($datos){
        	echo "<pre>datos:";
        	print_r($datos);
        	echo "</pre>";
        	$equipo = new Integrante();
        	$equipo -> set_idintegrante($datos['idintegrante']);
        	$equipo -> set_nombre($datos['nombre']);
        	$equipo -> set_apellido($datos['apellido']);
        	$equipo -> set_peso($datos['peso']);
        	$equipo -> set_estatura($datos['estatura']);
        	$equipo -> set_foto($datos['foto']);
        	$equipo -> set_edad($datos['edad']);
        	$equipo -> set_idequipo($datos['idequipo']);

        	if(count($Integrante->errores)>0){
        		print_r($Integrante->errores);
        	} 
        	die();
        }


        
		
		public function validaIntegrante($datos){
			$rs = $this->consulta_sql(" select * from integrante where nombre = '".$datos['nombre']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>